<?php

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

Auth::routes();

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 Route::resource('/task', App\Http\Controllers\TaskController::class);
 Route::resource('/user', App\Http\Controllers\UserController::class);

//  Route::post('updatePassword', 'ProfileController@updatePassword');
// Route::post('profile_photo_upload','ProfileController@upload_profile_photo');
Route::get('/profile',[App\Http\Controllers\UserController::class, 'profile'])->name('profile');
Route::put('/profile',[App\Http\Controllers\UserController::class, 'update_profile'])->name('profile.update');
