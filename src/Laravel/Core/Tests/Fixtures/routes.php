<?php

/*
 * This file is part of the Omed project.
 *
 * (c) Anthonius Munthi <https://itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::prefix('api')->group(function () {
    Route::apiResource('core_tests', 'TestApiController');
});

Route::get('/login', 'TestAuthController@login')->name('login');
