<?php

use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\API\v1\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'middleware' => 'api'], function () {
    Route::group(['middleware' => 'auth:api'], function () {
        Route::group(['prefix' => 'user'], function () {
            Route::post('', [AuthController::class, 'me']);
            Route::post('update/profile', [UserController::class, 'update_profile']);
        });
    });

    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('register', [AuthController::class, 'register']);
        Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:api');
    });
});
