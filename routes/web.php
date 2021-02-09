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

Route::middleware('auth')->group(function(){
    Route::get('/tweets', 'App\Http\Controllers\TweetsController@index' )->name('home');
    Route::post('/tweets', 'App\Http\Controllers\TweetsController@store' );
});
// ensure that user is auth and if not redirect to login page

Route::get('/profiles/{user}', 'App\Http\Controllers\ProfilesController@show')->name('profile');

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


