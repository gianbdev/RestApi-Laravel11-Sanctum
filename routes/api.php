<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Clients\ClientController;
use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Route;

route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('users', [UserController::class, 'getAllUsers']);
    Route::get('users/{id}', [UserController::class, 'getUserById']);
    Route::post('users', [UserController::class, 'store']);
    Route::put('users/{id}', [UserController::class, 'update']);
    Route::delete('users/{id}', [UserController::class, 'delete']);
    Route::get('GetUsersList', [UserController::class, 'listUser']);

    Route::get('Clients/GetAllClients', [ClientController::class, 'index']);
    Route::post('Clients/SaveClient', [ClientController::class, 'store']);
    Route::get('Clients/GetClient/{client}', [ClientController::class, 'show']);
    Route::put('Clients/UpdateClient/{client}', [ClientController::class, 'update']);
    Route::delete('Clients/DeleteClient/{client}', [ClientController::class, 'destroy']);
    Route::get('Clients/GetClientsList', [ClientController::class, 'listClients']);

    Route::post('logout', [AuthController::class, 'logout']);
});
