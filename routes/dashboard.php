<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\RedesController;
use App\Http\Controllers\EarthController;
use App\Http\Controllers\YoutubeController;
use App\Http\Controllers\InstagramController;
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

Route::post('/dashboard/redes', [RedesController::class, 'store']);

Route::post('/dashboard/earth', [EarthController::class, 'store'])
                ->middleware('auth:sanctum', 'isAdmin')
                ->name('register_earth');

Route::post('/dashboard/youtube', [YoutubeController::class, 'store'])
                ->middleware('auth:sanctum', 'isAdmin')
                ->name('register_youtube');

Route::post('/dashboard/instagram', [InstagramController::class, 'store'])
                ->middleware('auth:sanctum', 'isAdmin')
                ->name('register_instagram');

Route::delete('/dashboard/youtube/{id}', [YoutubeController::class, 'destroy'])
                ->middleware('auth:sanctum', 'isAdmin')
                ->name('delete_youtube');

Route::delete('/dashboard/instagram/{id}', [InstagramController::class, 'destroy'])
                ->middleware('auth:sanctum', 'isAdmin')
                ->name('delete_instagram');
