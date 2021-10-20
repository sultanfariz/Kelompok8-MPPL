<?php

namespace App\Providers;

// use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Blade;

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
        // Paginator::useBootstrap();

        Gate::define('admin', function (User $user) {
            return ($user->isAdmin || $user->email === 'admin@gmail.com');
        });

        Blade::if('admin', function () {
            return auth()->check() && (auth()->user()->isAdmin || auth()->user()->email === 'admin@gmail.com');
        });
    }
}
