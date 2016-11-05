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
    //Curator index (public index) page.
    public function Home()
    {
        return view('curator::pages.home');
    }

    //Curator login page.
    public function Login()
    {
        return view('curator::pages.login');
    }

    //Curator administrator dashboard.
    public function Dashboard()
    {
        return view('curator::pages.dashboard');
    }
}
