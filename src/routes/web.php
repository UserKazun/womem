<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
