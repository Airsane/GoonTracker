<?php

namespace App\Http\Controllers;

use App\Models\GoonReport;
use App\Models\Location;
use App\Service\LocationService;
use App\Service\TarkovBotApi;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use App\Models\User;
class HomepageController extends Controller
{
	private Collection $locations;
    public function __construct(
        private readonly LocationService $locationService,
		private readonly TarkovBotApi $tarkovBotApi
    ) {
        $this->locationService->loadLocations();
		$data = $this->tarkovBotApi->getlatestGoonReport();
		$this->locations = Location::all()->keyBy('name');

		if ($data) {
			$latestReport = GoonReport::orderByDesc('reported_when')->first();
			$newReport = new GoonReport();
			$newReport->location_id = $this->locations->where('name', $data['location'])->first()->id;
			$newReport->reported_when = Carbon::make($data['reported']);
			if(!$latestReport || $latestReport->reported_when->diffInMinutes($newReport->reported_when) > 5){
                $user = User::first();
                if(!$user){
                    $user = new User();
                    $user->login = 'anonymous';
                    $user->discord_id = 'anonymous';
                    $user->save();
                }
                $newReport->user_id = $user->id;
				$newReport->save();
			}
		}

    }

    public function index(Request $request)
    {
		$locations = $this->locations;
        $lastReport = GoonReport::with('location')->orderByDesc('reported_when')->first();
        $previousReport = GoonReport::with('location')->orderByDesc('reported_when')->skip(1)->first();
        $lastReportTime = $request->session()->get('last_report');
        $canReport = $lastReportTime ? $lastReportTime->diffInMinutes(now()) >= 5 : true;
        return view('welcome', compact('locations', 'lastReport', 'previousReport', 'lastReportTime', 'canReport'));
    }
}
