<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ClientController::class, 'index'])->name('client.index');
Route::post('/client/store', [ClientController::class, 'store'])->name('client.store');
Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
Route::get('client/{id}/edit', [ClientController::class, 'edit']);
Route::put('client/{id}/update', [ClientController::class, 'update']);
Route::delete('client/{id}/delete', [ClientController::class, 'destroy']);
Route::get('client/{id}/show', [ClientController::class, 'show']);
Route::get('/client/search', [ClientController::class, 'search'])->name('client.search');