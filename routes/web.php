<?php

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


// Dashboard
Route::get('/dashboard/login', function () {
    if (!Auth::check()) {
        return view('dashboard.login');
    }
    return back();
});

Route::group(['middleware' => ['auth.admin']], function () {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/dashboard/pqr', 'PqrController@index')->name('pqr');
    Route::get('/dashboard/especial', 'EspecialController@index')->name('especial');
    Route::get('/dashboard/sanciones', 'SancionesController@index')->name('sanciones');
    Route::get('/dashboard/modemygps', 'ModemgpsController@index')->name('modemygps');
    Route::get('/dashboard/postulados', 'PostuladosController@index')->name('postulados');
    Route::get('/dashboard/turismo', 'TurismoController@index')->name('turismo');

});
