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
    return view('dashboard');
})->name('dashboard');

Route::prefix('sheldon')->group(function () {
    Route::get('show/{game_user}', 'SheldonGameController@show')->name('sheldon');
    Route::post('validateU', 'SheldonGameController@validateUser');
    Route::post('saveResults/{game_user}', 'SheldonGameController@update');
});
Route::prefix('mastermind')->group(function () {
    Route::get('show/{game_user}', 'MasterMindGameController@show')->name('mastermind');
    Route::post('validateU', 'MasterMindGameController@validateUser');
    Route::post('saveResults/{game_user}', 'MasterMindGameController@update');
});
