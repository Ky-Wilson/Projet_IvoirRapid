<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::get('client', [App\Http\Controllers\Admin\ClientController::class, 'index']);


    Route::get('add-client', [App\Http\Controllers\Admin\ClientController::class, 'create']);

    Route::post('add-client', [App\Http\Controllers\Admin\ClientController::class, 'store']);
});