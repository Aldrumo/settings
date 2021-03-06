<?php

namespace Aldrumo\Settings;

use Aldrumo\Settings\Contracts\Repository as SettingsContract;
use Illuminate\Support\ServiceProvider;

class SettingsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->registerRepository();
    }

    public function boot()
    {
        $this->bootMigrations();
    }

    protected function bootMigrations()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }

    protected function registerRepository()
    {
        $this->app->singleton(
            SettingsContract::class,
            function ($app) {
                return new Repository();
            }
        );
    }
}
