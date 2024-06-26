<?php

use App\Http\Controllers\Api\v1\AuthController;
use App\Http\Controllers\API\v1\UserController;
use App\Http\Controllers\API\v1\StatusController;
use App\Http\Controllers\API\v1\GuideController;


use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'v1', 'middleware' => 'api'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::post('login', [AuthController::class, 'login']);
        Route::post('register', [AuthController::class, 'register']);
        Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:api');
        Route::post('refresh', [AuthController::class, 'refresh']);
        Route::post('user', [AuthController::class, 'me'])->middleware('auth:api');
        Route::post('password/token', [AuthController::class, 'send_reset_token']);
        Route::post('password/reset', [AuthController::class, 'reset_password']);
        Route::post('user/update/profile', [UserController::class, 'update_profile'])->middleware('auth:api');
        Route::post('user/update/password', [UserController::class, 'change_password'])->middleware('auth:api');

        Route::get('/statuses', [StatusController::class, 'getStatuses']);
        Route::get('guides/category/{category}', [GuideController::class, 'getGuidesByCategory']);
        Route::get('guides/count/category/', [GuideController::class, 'getAllCategoryCounts']);

    });

});
