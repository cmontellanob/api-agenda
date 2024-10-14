<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ProfesionController;
use App\Http\Controllers\LoginController;



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('agenda', AgendaController::class);
Route::apiResource('profesion', ProfesionController::class);
Route::post('login', [LoginController::class, 'login']);
