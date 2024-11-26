<?php

namespace App\Services;

use App\Models\User;
use App\Repository\UserRepository;

class UserService
{
    protected $userRepo;
    /**
     * Create a new class instance.
     */
    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    public function getAllUsers()
    {
        return $this->userRepo->getAllUsers();
    }

    // Método para encontrar un usuario por su ID
    public function findUserById($id)
    {
        return User::find($id);  // Devuelve el usuario o null si no lo encuentra
    }

    public function createUser(array $data): User
    {
        // Lógica adicional para crear un usuario
        return User::create($data);
    }

    public function updateUser(User $user, array $data): User
    {
        // Validar y actualizar un usuario
        $user->update($data);
        return $user;
    }

    public function deleteUser(User $user)
    {
        $user->delete();
    }
}
