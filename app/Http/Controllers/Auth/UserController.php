<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UserRequest;
use App\Http\Resources\UserResource;
use App\Services\UserService;

class UserController extends Controller
{
    // Mostrar todos los usuarios
    public function getAllUsers(UserService $userService)
    {
        $users = $userService->getAllUsers();
        return $users;
    }

    // Obtener usuario por ID
    public function getUserById($id, UserService $userService)
    {
        $user = $userService->findUserById($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        return new UserResource($user);
    }

    // Guardar un nuevo usuario
    public function store(UserRequest $request, UserService $userService)
    {
        // Asignar el rol 'user' por defecto al crear un usuario
        $data = $request->validated();
        $data['role'] = 'admin';

        $user = $userService->createUser($data);
        return response()->json(new UserResource($user), 201);
    }

    // Actualizar usuario
    public function update($id, UserRequest $request, UserService $userService)
    {
        $user = $userService->findUserById($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        $updatedUser = $userService->updateUser($user, $request->validated());
        return new UserResource($updatedUser);
    }

    // Eliminar un usuario
    public function delete($id, UserService $userService)
    {
        $user = $userService->findUserById($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        $userService->deleteUser($user);
        return response()->json(['message' => 'User deleted successfully']);
    }

    // Listar los nombres de los usuarios
    public function listUser(UserService $userService)
    {
        $users = $userService->getAllUsers();
        return UserResource::collection($users);
    }
}
