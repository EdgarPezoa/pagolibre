<?php

Route::middleware(['guest'])->group(function () {
    Route::namespace('pago_facil')->group(function () {
        Route::get('/','HomeController@index')->name('index');
    });
});

Auth::routes();
