<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdmissionsController;
use App\Http\Controllers\SocialMediaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/directory', [DirectoryController::class, 'index'])->name('directory.index');
Route::get('/directory/{staff}', [DirectoryController::class, 'show'])->name('directory.show');

Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

Route::get('/admissions', [AdmissionsController::class, 'index'])->name('admissions');

Route::get('/social-media', [SocialMediaController::class, 'index'])->name('social-media');
