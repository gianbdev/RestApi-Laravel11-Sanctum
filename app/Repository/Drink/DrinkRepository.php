<?php

namespace App\Repository\Drink;

use App\Models\Drink;

class DrinkRepository implements DrinkRepositoryInterface
{
    public function getDrinks()
    {
        return Drink::paginate(10);
    }

    public function findDrinkById(int $id): ?Drink
    {
        return Drink::fint($id);
    }

    public function drinksList()
    {
        return Drink::all();
    }
}
