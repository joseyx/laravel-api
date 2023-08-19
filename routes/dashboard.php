<?php

use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;

Route::post('/dashboard/form', [EmpresaController::class, 'store'])
                ->middleware('auth:sanctum', 'isAdmin')
                ->name('register_empresa');

Route::get('/dashboard/empresa', [EmpresaController::class, 'index'])
                ->middleware('auth:sanctum', 'isAdmin')
                ->name('get_empresa');
