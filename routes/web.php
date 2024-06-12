<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/learn-guide', 'learn-guide')->name('learn-guide');
