<?php

use app\http\controllers\auth\usercontroller;
use app\http\controllers\auth\authcontroller;
use illuminate\support\facades\route;

// ruta para obtener al usuario autenticado
/*
route::get('/user', function (request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/

// rutas de autenticación (login)
route::post('login', [authcontroller::class, 'login']);
route::post('logout', [authcontroller::class, 'logout'])->middleware('auth:sanctum');

// rutas protegidas para la gestión de usuarios
route::middleware('auth:sanctum', 'admin')->group(function () {
    // obtener todos los usuarios
    route::get('users', [usercontroller::class, 'getallusers']);

    // obtener usuario por id
    route::get('users/{id}', [usercontroller::class, 'getuserbyid']);

    // crear un nuevo usuario
    route::post('users', [usercontroller::class, 'store']);

    // actualizar usuario
    route::put('users/{id}', [usercontroller::class, 'update']);

    // eliminar un usuario
    route::delete('users/{id}', [usercontroller::class, 'delete']);

    // listar los nombres de los usuarios
    route::get('users/names', [usercontroller::class, 'listuser']);
});
