<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GoonReport;
use App\Models\Location;
use App\Service\AuditService;
class ReportController extends Controller
{
    public function __construct(
        private readonly AuditService $auditService
    ) {}

    public function report(Request $request)
    {
        $user = $request->user();
        if (!$user) {
            return redirect()->route('login');
        }

        $request->validate([
            'report_location' => 'required|exists:locations,id'
        ]);

        $locationId = $request->input('report_location');
        $location = Location::find($locationId);

        if (!$location) {
            return redirect()->route('home')->with('error', 'Invalid location selected');
        }

        $lastReport = $request->session()->get('last_report');

        if ($lastReport && $lastReport->diffInMinutes(now()) < 5) {
            return redirect()->route('home')->with('error', 'Please wait 5 minutes between reports');
        }

        $this->auditService->report($user->id, $location->id);

        $goonReport = new GoonReport();
        $goonReport->user_id = $user->id;
        $goonReport->location_id = $location->id;
        $goonReport->reported_when = now();
        $goonReport->save();

        $request->session()->put('last_report', now());

        return redirect()->route('home')->with('success', 'Report submitted successfully');
    }


}
