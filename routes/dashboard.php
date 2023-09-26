<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\RedesController;
use Illuminate\Support\Facades\Route;

Route::post('/dashboard/form', [EmpresaController::class, 'store'])
                ->middleware('auth:sanctum', 'isAdmin')
                ->name('register_empresa');

Route::get('/dashboard/empresa', [EmpresaController::class, 'show'])
                ->name('get_empresa');

Route::post('/dashboard/config', [ConfigController::class, 'store'])
                ->middleware('auth:sanctum', 'isAdmin')
                ->name('register_config');

Route::get('/dashboard/config', [ConfigController::class, 'index']);

Route::get('/dashboard/redes', [RedesController::class, 'index'])
                ->name('get_redes');
