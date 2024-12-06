<?php

namespace App\Repository;

use App\Models\Drink;

class DrinkRepository
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function getClients()
    {
        return Drink::paginate(10);
    }

    public function findClientById(int $id): ?Drink
    {
        return Drink::fint($id);
    }

    public function drinksList()
    {
        return Drink::all();
    }
}
