<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/modulos', [App\Http\Controllers\ModuloController::class, 'index'])->name('modulos');

Route::get('/modulos/edit/{id}', [App\Http\Controllers\ModuloController::class, 'getModulo'])->middleware('auth');

Route::put('/modulos', [App\Http\Controllers\ModuloController::class, 'putModulo']);

Route::get('/ciclo/{id}/modulos', [App\Http\Controllers\ModuloController::class, 'getModulosDeUnCiclo']);