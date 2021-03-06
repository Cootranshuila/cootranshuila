<?php

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

    //Grupo de Rutas para el modulo de PQR
    Route::group(['middleware' => ['permission:pqr|universal']], function () {
        Route::get('/dashboard/pqr/pqr-menu', 'PqrController@index')->name('pqr');
        Route::post('/dashboard/pqr/{tipo}/{texto}', 'PqrCorreosController@tabla');
        Route::get('/dashboard/pqr/paginacion/{tipo}', 'PqrCorreosController@paginacion');
        Route::get('/dashboard/pqr/correos', 'PqrCorreosController@index')->name('pqr-correos');
        Route::get('/dashboard/pqr/reclamos', 'PqrCorreosController@index')->name('pqr-reclamos');
        Route::get('/dashboard/pqr/sugerencias', 'PqrCorreosController@index')->name('pqr-sugerencias');
        Route::get('/dashboard/pqr/quejas', 'PqrCorreosController@index')->name('pqr-quejas');
        Route::get('/dashboard/pqr/felicitaciones', 'PqrCorreosController@index')->name('pqr-felicitaciones');
        Route::get('/dashboard/pqr/contestados', 'PqrController@index')->name('pqr-contestados');
        Route::get('/dashboard/pqr/{id}/ver-pqr', 'PqrCorreosController@verPqr')->name('ver-pqr');
        Route::get('/dashboard/pqr/{id}', 'PqrCorreosController@show');
        
    });

    Route::group(['middleware'=>['permission:servicio-especial|universal']],function(){
        Route::get('/dashboard/especial', 'EspecialController@index')->name('especial');
    });
    
    Route::get('/dashboard/sanciones', 'SancionesController@index')->name('sanciones');
    Route::get('/dashboard/modemygps', 'ModemgpsController@index')->name('modemygps');
    Route::get('/dashboard/postulados', 'PostuladosController@index')->name('postulados');
    Route::get('/dashboard/turismo', 'TurismoController@index')->name('turismo');

});
