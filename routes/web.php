<?php

use App\Http\Controllers\MainConroller;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
}) -> name('home');


Route::get('/about', [TestController::class, 'about']) -> name('about');

Route::get('/contacts', [TestController::class, 'contacts']) -> name('contacts');

Route::get('/', [MainConroller::class, 'ShowIndex']) -> name('home');

Route::get('/array', [MainConroller::class, 'ShowArray']) -> name('array');