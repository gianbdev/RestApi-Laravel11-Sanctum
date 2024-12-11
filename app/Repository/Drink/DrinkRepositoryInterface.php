<?php

namespace App\Repository\Drink;

use App\Models\Drink;

interface DrinkRepositoryInterface
{
    public function getDrinks();

    public function findDrinkById(int $id): ?Drink;

    public function drinksList();
}
