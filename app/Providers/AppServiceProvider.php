<?php

namespace App\Providers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
//        DB::listen(function ($query) {
//           var_dump($query->sql);
//        });

        //тест для middleware с can
        Gate::define('admin-only', function(User $user) {
           return $user->id === 1;
        });

        Gate::define('message-owner', function (User $user, Message $message) {
           return $user->id === $message->user_id;
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
