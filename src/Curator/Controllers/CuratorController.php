<?php

/*
|--------------------------------------------------------------------------
| Curator: Controller
|--------------------------------------------------------------------------
|
| This is Curator's primary controller class for Laravel.
|
*/

namespace Curator\Controllers;

use App\Http\Controllers\Controller;

class CuratorController extends Controller
{
    //Curator administrator dashboard.
    public function Dashboard()
    {
        echo 'Hello World.';
    }
}
