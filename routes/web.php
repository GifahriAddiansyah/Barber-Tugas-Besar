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
    return view('/welcome');
});
Route::resource('layouts', 'DashboardController');
Route::resource('barber', 'BarberController');
Route::resource('harga', 'HargaController');
// Route::resource('login', 'LoginController');
Route::resource('admin', 'AdminController');
Route::get('/login', function () {
    return view('login.login');
});
Route::get('/login', 'DashboardController@login')->name('login');
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

// Route::get('/login/register','LoginController');
// Route::Resource('/harga',HargaController::class);
// Route::Resource('/dashboards',DashboardController::class);
// Route::Resource('/layouts',DashboardController::class);
Route::Resource('/harga',HargaController::class);
Route::Resource('/dashboards',DashboardController::class);
Route::Resource('/layouts',DashboardController::class);
