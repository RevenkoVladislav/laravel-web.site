<?php

namespace App\Providers;

use Dadata\DadataClient;
use Illuminate\Support\ServiceProvider;

class DadataProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(DadataClient::class, function () {
            $conf = config('dadata');
            return new DadataClient($conf['token'], $conf['secret']);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
