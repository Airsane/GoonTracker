<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SignController;

Route::get('/', [HomepageController::class, 'index'])->name('home');
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');


Route::get('/discord/callback', [SignController::class, 'discordCallback'])->name('discord.callback');
Route::get('/login', [SignController::class, 'login'])->name('login');
Route::get('/logout', [SignController::class, 'logout'])->name('logout');


Route::post('/report', [ReportController::class, 'report'])->name('report');
