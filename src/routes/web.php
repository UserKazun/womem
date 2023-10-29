<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
