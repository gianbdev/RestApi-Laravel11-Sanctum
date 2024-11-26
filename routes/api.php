<?php

use App\Http\Controllers\Auth\UserController; // 'A' y 'U' mayúscula
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;         // 'I' y 'R' mayúscula

// ruta para obtener al usuario autenticado

route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [App\Http\Controllers\Auth\AuthController::class, 'register']);
Route::post('login', [App\Http\Controllers\Auth\AuthController::class, 'login']);

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('users', [UserController::class, 'getAllUsers']);
    Route::get('users/{id}', [UserController::class, 'getUserById']);
    Route::post('users', [UserController::class, 'store']);
    Route::put('users/{id}', [UserController::class, 'update']);
    Route::delete('users/{id}', [UserController::class, 'delete']);
    Route::get('users/names', [UserController::class, 'listUser']);
});
