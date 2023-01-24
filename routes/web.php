<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PoliceController;
use App\Http\Controllers\PageController;

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
    return view('main');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//  User Web Views
Route::group(['middleware' => ['auth', 'user']], function() {
    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/report-contents-{id}', [PageController::class, 'report_contents']);
    Route::get('/user-profile', [PageController::class, 'user_profile']);

});

//  Police Web Views
Route::group(['middleware' => ['auth', 'police']], function() {
    Route::get('/police', [PoliceController::class, 'index'])->name('police');
    Route::get('/police-report-contents-{id}', [PageController::class, 'police_report_contents']);
    Route::get('/police-profile', [PageController::class, 'police_profile']);

});