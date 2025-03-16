<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\AuditService;
use App\Models\User;
use App\Models\GoonReport;
use Illuminate\Support\Facades\Auth;
use App\Security\DiscordAuth;
class SignController extends Controller
{
    public function __construct(
        private readonly AuditService $auditService
    ) {}

    public function discordCallback(Request $request)
    {
        $discordAuth = app(DiscordAuth::class);
        $discordAuth->init($request->code, $request->state);
        $userData = $discordAuth->getUser();
        $username = $userData['username'];
        $discordId = $userData['id'];
        $user = User::where('discord_id', $discordId)->first();
        if (!$user) {
            $user = User::create([
                'login' => $username,
                'discord_id' => $discordId
            ]);
            $this->auditService->registerReport($user->id);
        }
        Auth::login($user);
        $lastReport = GoonReport::where('user_id', $user->id)->orderByDesc('reported_when')->first();
        if ($lastReport) {
            $request->session()->put('last_report', $lastReport->reported_when);
        }
        $this->auditService->loginReport($user->id);
        return redirect()->route('home');
    }

    public function login()
    {
        $discordAuth = app(DiscordAuth::class);
        return redirect($discordAuth->getUrl());
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $this->auditService->logout($user->id);
            Auth::logout();
        }
        return redirect()->route('home');
    }
}
