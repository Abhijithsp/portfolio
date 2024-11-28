<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\master\Experience;
use App\Models\master\ExperienceTask;
use App\Models\master\UserInfo;

class EntryPointController extends Controller
{
    public function home_screen()
    {

        return view('screens.home');
    }

    public function about_screen()
    {
        $user = UserInfo::first();

        return view('screens.about', compact('user'));
    }

    public function resume_screen()
    {
        $experiences = Experience::first();
        $experience_tasks = ExperienceTask::all();
        return view('screens.resume', compact('experiences', 'experience_tasks'));
    }

    public function project_screen()
    {
        return view('screens.projects');
    }
}
