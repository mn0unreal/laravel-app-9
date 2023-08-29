<?php

namespace App\Providers;

use App\Mail\WelcomeUser;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // add
        Schema::defaultStringLength(191);
        User::created(function ($user){
            Mail::to($user)->send(new WelcomeUser($user));

        });
    }
}
