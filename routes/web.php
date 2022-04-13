<?php

use App\Http\Controllers\HubController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LessonController;
use App\Models\Hub;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('classes', function () {
    return view('classes');
});

Route::get('schedule', function () {
    return view('schedule');
});

Route::get('events', function () {
    return view('events');
});

Route::get('company', function () {
    return view('company');
});

Route::get('newsletter', function () {
    return view('newsletter');
});

Route::get('academy-hub', function () {
    return view('academy-hub');
});

Route::get('company-hub', function () {
    return view('company-hub');
});

Route::resource('instructors', InstructorController::class);
Route::resource('hubs', HubController::class);
//Route::resource('lessons', LessonController::class);

Route::get('/hubs/{hub:hubSlug}', function (Hub $hub) {
    return view('hubs.show', compact('hub'));
});
Route::post('/hubs/{hub:hubSlug}', function (Hub $hub) {
    return $hub;
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
