<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Clients\ClientController;
use App\Http\Controllers\Drink\DrinkController;
use App\Http\Controllers\TypeDocument\TypeDocumentController;
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
    Route::get('Clients/GetClientsList', [ClientController::class, 'list']);

    Route::get('TypeDocuments/GetAllTypeDocuments', [TypeDocumentController::class, 'index']);
    Route::post('TypeDocuments/SaveTypeDocument', [TypeDocumentController::class, 'store']);
    Route::get('TypeDocuments/GetTypeDocument/{typeDocument}', [TypeDocumentController::class, 'show']);
    Route::put('TypeDocuments/UpdateTypeDocument/{typeDocument}', [TypeDocumentController::class, 'update']);
    Route::delete('TypeDocuments/DeleteTypeDocument/{typeDocument}', [TypeDocumentController::class, 'destroy']);
    Route::get('TypeDocuments/GetTypeDocumentsList', [TypeDocumentController::class, 'list']);

    Route::get('Drinks/GetAllDrinks', [DrinkController::class, 'index']);
    Route::post('Drinks/SaveDrink', [DrinkController::class, 'store']);
    Route::get('Drinks/GetDrink/{drink}', [DrinkController::class, 'show']);
    Route::put('Drinks/UpdateDrink/{drink}', [DrinkController::class, 'update']);
    Route::delete('Drinks/DeleteDrink/{drink}', [DrinkController::class, 'destroy']);
    Route::get('Drinks/GetDrinksList', [DrinkController::class, 'list']);

    Route::post('logout', [AuthController::class, 'logout']);
});
