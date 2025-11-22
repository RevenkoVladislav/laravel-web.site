<?php

namespace App\Providers;

use App\Services\AddressParser\AddressParser;
use App\Services\AddressParser\AddressParserInterface;
use Illuminate\Support\ServiceProvider;

class AddressParserProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(AddressParserInterface::class, function () {
            $conf = config('parsers')['address'];
            return new AddressParser($conf['token'], $conf['secret']);
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
