<?php


// HOME
Route::middleware(['guest'])->group(function () {
    Route::namespace('home')->group(function () {
        Route::prefix('')->group(function() {
            Route::name('home_')->group(function () {
                Route::get('/','HomeController@index')->name('index');
            });
        });
    });
});

// PAGO LIBRE
Route::middleware(['login'])->group(function () {
    Route::namespace('pago_libre')->group(function () {
        Route::prefix('intranet')->group(function() {
            Route::name('pagolibre_')->group(function () {
                Route::get('/','HomeController@index')->name('index');
            });
        });
    });
});

Auth::routes();
