<?php

use App\Http\Controllers\API\EntryPointController;
use Illuminate\Support\Facades\Route;


Route::get('/home_screen', [EntryPointController::class, "home_screen"])->name('home_screen');
Route::get('/about_screen', [EntryPointController::class, "about_screen"])->name('about_screen');
Route::get('/resume_screen', [EntryPointController::class, "resume_screen"])->name('resume_screen');
Route::get('/project_screen', [EntryPointController::class, "project_screen"])->name('project_screen');

Route::get('/', static function () {
    return view('screens.home');
});
