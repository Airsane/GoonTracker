<?php

namespace App\Service;

use App\Models\Location;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class LocationService
{
	private const BOSS_NAME = 'Knight';

	private function getJsonFromApi()
	{
		$response = Http::withHeaders([
			'content-type' => 'application/json',
		])
						->withoutVerifying() // Disable SSL verification - only use in development
						->post('https://api.tarkov.dev/graphql', [
				'query' => 'query {
                maps {
                    name
                    bosses {
                        name
                        spawnChance
                    }
                }
            }',
			]);

		if (!$response->successful()) {
			throw new \RuntimeException('Failed to fetch data from Tarkov API: ' . $response->status());
		}

		return $response->json();
	}

	private function updateLocations(): void
	{
		$data = $this->getJsonFromApi();
		$bosses = $this->goThroughMaps($data['data']['maps']);
		Location::truncate();
		foreach ($bosses as $key => $boss) {
			$locationData = new Location();
			$locationData->spawn_chance = $boss['spawnChance'];
			$locationData->last_updated = new Carbon();
			$locationData->name = $key;

			// Set specific IDs for certain maps
			if ($key === 'Customs') {
				$locationData->id = 1;
			} else if ($key === 'Lighthouse') {
				$locationData->id = 2;
			} else if ($key === 'Shoreline') {
				$locationData->id = 3;
			} else if ($key === 'Woods') {
				$locationData->id = 4;
			}

			$locationData->save();
		}
	}

	public function loadLocations(): void
	{
		/**
		 * @var Location|null $location
		 */
		$location = Location::first();
		if (empty($location)) {
			$this->updateLocations();
			return;
		}
		$lastUpdated = $location->last_updated;
		$now = new Carbon();

		$diff = $now->getTimestamp() - $lastUpdated->getTimestamp();
		if ($diff > 60 * 60 * 24) {
			$this->updateLocations();
		}
	}

	private function goThroughMaps(array $maps): array
	{
		$bosses = [];
		foreach ($maps as $map) {
			$bossesOnMap = $this->filterBosses($map['bosses']);
			if (empty($bossesOnMap)) {
				continue;
			}
			$bosses[$map['name']] = $bossesOnMap[0];
		}
		return $bosses;
	}

	private function filterBosses(array $bosses): array
	{
		$filteredBosses = [];
		foreach ($bosses as $boss) {
			if ($boss['name'] === self::BOSS_NAME) {
				$filteredBosses[] = $boss;
			}
		}
		return $filteredBosses;
	}
}