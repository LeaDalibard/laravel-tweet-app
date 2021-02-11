<?php

use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth')->group(function () {
    Route::get('/tweets', 'App\Http\Controllers\TweetsController@index')->name('home');
    Route::post('/tweets', 'App\Http\Controllers\TweetsController@store');

    Route::post('/profiles/{user:username}/follow', 'App\Http\Controllers\FollowsController@store')
        ->name('follow');
    Route::get('/profiles/{user:username}/edit',
        'App\Http\Controllers\ProfilesController@edit')
        ->middleware('can:edit,user');

    Route::patch('/profiles/{user:username}',
        'App\Http\Controllers\ProfilesController@update')
        ->middleware('can:edit,user');

    Route::get('/explore','App\Http\Controllers\ExploreController');
});
// ensure that user is auth and if not redirect to login page

Route::get('/profiles/{user:username}', 'App\Http\Controllers\ProfilesController@show')
    ->name('profile');
//{user:name}, here we specify the name of the attribute, we want to look name not id



Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



