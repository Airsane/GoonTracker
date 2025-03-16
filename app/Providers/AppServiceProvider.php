<?php

namespace App\Providers;

use App\Security\DiscordAuth;
use App\Service\TarkovBotApi;
use \Illuminate\Contracts\Session\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(DiscordAuth::class, function ($app) {
            return new DiscordAuth(
                $app->make(Session::class),
                config('discord.client_id'),
                config('discord.client_secret'),
                config('discord.scopes'),
                config('discord.redirect_uri'),
                config('discord.bot_token')
            );
        });
        $this->app->singleton(TarkovBotApi::class, function ($app) {
            return new TarkovBotApi(config('tarkovbotapi.api_key'));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
