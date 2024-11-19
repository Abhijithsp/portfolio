<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;

class EntryPointController extends Controller
{
    public function home_screen()
    {
        return view('screens.home');
    }

    public function about_screen()
    {
        return view('screens.about');
    }

    public function resume_screen()
    {
        return view('screens.resume');
    }

    public function project_screen()
    {
        return view('screens.projects');
    }
}
