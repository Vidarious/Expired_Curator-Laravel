<?php

/*
|--------------------------------------------------------------------------
| Curator: Web Routes
|--------------------------------------------------------------------------
|
| This is Curator's primary routes file and is registered via Curator's
| service provider. All routes for Curator are web-type routing.
|
*/

//Route to Controller: CuratorController:Dashboard.
Route::get('dashboard', 'Curator\Controllers\CuratorController@Dashboard')->name('Dashboard');
