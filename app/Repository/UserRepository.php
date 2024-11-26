<?php

namespace App\Repository;

use App\Models\User;

class UserRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public function getAllUsers()
    {
        return User::all();
    }

    public function findUserById(int $id): ?User
    {
        return User::find($id);
    }
}
