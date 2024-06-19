<?php

use Illuminate\Support\Facades\Route;


Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/', 'BaseController@index');

    Route::namespace('BankReport')->group(function(){
        Route::get('/bank-report', 'BankReportClientController@index');
    });

});

