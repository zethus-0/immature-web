<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\Developer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;

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
        Model::unguard();

        Gate::define('admin', function (User $user) {
            return $user->is_admin;
        });

        Blade::if('admin', function () {
            return request()->user()?->can('admin');
        });
        Gate::define('writer', function (User $user) {
            return $user->is_writer;
        });

        Blade::if('writer', function () {
            return request()->user()?->can('writer');
        });

    }
}
