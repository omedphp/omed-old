<?php

use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function(){
    Route::apiResource('core_tests','TestApiController');
});

Route::get('/login','TestAuthController@login')->name('login');