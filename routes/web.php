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
});
// Route::resource('/','CourseController');
// Route::get('/', 'BarberController@index')->name('beranda');
Route::Resource('/harga',HargaController::class);
Route::Resource('/dashboards',DashboardController::class);
