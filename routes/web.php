<?php

Auth::routes();

// HOME
Route::namespace('home')->group(function () {
    Route::prefix('')->group(function () {
        Route::name('home_')->group(function () {
            Route::get('/', 'HomeController@index')->name('index');
        });
    });
});

// PAGO LIBRE
Route::middleware(['login'])->group(function () {
    Route::namespace('pago_libre')->group(function () {
        Route::prefix('intranet')->group(function () {
            Route::name('pagolibre_')->group(function () {
                Route::get('/', 'HomeController@index')->name('index');
                // @TODOO BORRAR
                Route::get('/historicos', 'HomeController@historicos')->name('historicos');
                
                Route::resource('/transaccion', 'TransaccionController');                
            });
        });

    });
});

// FLOW
Route::namespace('Flow')->group(function () {
    Route::prefix('apiFlow')->group(function () {
        Route::name('apiFlow_')->group(function () {
            Route::post('/confirm', 'FlowController@confirm')->name('confirm');
            Route::post('/result', 'FlowController@result')->name('result');
        });
    });
});
