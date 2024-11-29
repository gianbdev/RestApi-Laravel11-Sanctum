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

    public function findUserById($id)
    {
        return User::find($id);
    }

    public function createUser(array $data): User
    {
        return User::create($data);
    }

    public function updateUser(User $user, array $data): User
    {
        $user->update($data);
        return $user;
    }

    public function deleteUser(User $user)
    {
        $user->delete();
    }
}
