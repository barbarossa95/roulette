<?php

use App\Http\Controllers\Admin\UserController as AdminUserController;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('raffle', 'RaffleController@index')->name('raffle');
    Route::post('raffle', 'RaffleController@participate')
        ->name('participate')
        ->middleware('can:participate,App\Raffle');

    Route::post('withdraw/money', 'UserController@withdrawMoney')->name('withdrawMoney');
    Route::post('withdraw/coins', 'UserController@withdrawCoins')->name('withdrawCoins');

    Route::middleware('admin')
        ->prefix('admin')
        ->group(function () {
            Route::resource('user', AdminUserController::class);
        });
});
