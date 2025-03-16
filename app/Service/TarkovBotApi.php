<?php

namespace App\Service;

use Illuminate\Support\Facades\Http;
class TarkovBotApi
{
	private string $apiKey;
	private const API_URL = 'https://tarkovbot.eu/api/';

	public function __construct(string $apiKey)
	{
		$this->apiKey = $apiKey;
	}

	public function getlatestGoonReport()
	{
		$goonsUrl = self::API_URL . 'goonslocation';
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'auth-token' => $this->apiKey,
        ])->withoutVerifying()->get($goonsUrl);

        if ($response->successful()) {
            return $response->json()['pvp'];
        }
        return null;
	}
}