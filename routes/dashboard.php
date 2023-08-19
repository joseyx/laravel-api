<?php

use App\Http\Controllers\EmpresaController;
use Illuminate\Support\Facades\Route;

Route::post('/dashboard/form', [EmpresaController::class, 'store'])
                ->middleware('auth:sanctum', 'isAdmin')
                ->name('register_empresa');


