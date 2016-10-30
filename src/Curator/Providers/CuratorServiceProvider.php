<?php

/*
|--------------------------------------------------------------------------
| Curator: Service Provider
|--------------------------------------------------------------------------
|
| This is Curator's primary service provider for Laravel. Be sure to add
| this provider in your config/app.php file of your Laravel installation.
|
*/

namespace Curator\Providers;

use Illuminate\Support\ServiceProvider;

class CuratorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //Register option for user view publishing with vendor:publish.
        $this->publishes([
            __DIR__.'/../Resources/Views' => base_path('resources/views/vendor/curator'),
        ]);

        //Register Curator's migrations.
        $this->loadMigrationsFrom(__DIR__.'/../Database/Migrations');

        //Register Curator's views.
        $this->loadViewsFrom(__DIR__.'/../Resources/Views', 'curator');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //Load Curator's routes.
        include __DIR__.'/../Routes/CuratorRoutesWeb.php';

        //Load Curator's seeds.
        include __DIR__.'/../Database/Seeds/CuratorDatabaseSeeder.php';
        include __DIR__.'/../Database/Seeds/AppInit/StatusTableSeeder.php';
        include __DIR__.'/../Database/Seeds/AppInit/UserTableSeeder.php';
        include __DIR__.'/../Database/Seeds/AppInit/FlagTableSeeder.php';
        include __DIR__.'/../Database/Seeds/AppInit/RoleTableSeeder.php';
        include __DIR__.'/../Database/Seeds/AppInit/SettingTableSeeder.php';
        include __DIR__.'/../Database/Seeds/AppInit/PermissionTableSeeder.php';
        include __DIR__.'/../Database/Seeds/AppInit/ActivityTableSeeder.php';
        include __DIR__.'/../Database/Seeds/AppInit/UserRoleTableSeeder.php';
        include __DIR__.'/../Database/Seeds/AppInit/RolePermissionTableSeeder.php';
        include __DIR__.'/../Database/Seeds/AppInit/UserFlagTableSeeder.php';

        //Initialize Curator's controller.
        $this->app->make('Curator\Controllers\CuratorController');
    }
}
