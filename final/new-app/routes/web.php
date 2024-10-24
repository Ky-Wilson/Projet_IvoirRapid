<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Auth\ClientAuthController; // Importer le contrôleur d'authentification des clients

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Routes pour la connexion des clients
Route::get('/client/login', [ClientAuthController::class, 'showLoginForm'])->name('client.login');
Route::post('/client/login', [ClientAuthController::class, 'login'])->name('client.login.submit');



Route::prefix('admin')->middleware('auth', 'isAdmin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/check-contribuable/{compte}', [ClientController::class, 'checkContribuable']);


    Route::get('client', [App\Http\Controllers\Admin\ClientController::class, 'index']);

    Route::get('add-client', [App\Http\Controllers\Admin\ClientController::class, 'create']);

    Route::post('add-client', [App\Http\Controllers\Admin\ClientController::class, 'store']);
    
    Route::get('important', [App\Http\Controllers\Admin\ClientController::class, 'importantClients'])->name('clients.important');
    
    Route::get('edit-client/{client_id}', [App\Http\Controllers\Admin\ClientController::class, 'edit']);

    Route::put('update-client/{client_id}', [App\Http\Controllers\Admin\ClientController::class, 'update']);

    Route::get('delete-client/{client_id}', [App\Http\Controllers\Admin\ClientController::class, 'destroy']);
});
