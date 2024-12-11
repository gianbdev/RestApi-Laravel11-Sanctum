<?php

namespace App\Services\Drink;

use App\Models\Drink;

interface DrinkServiceInterface
{
    public function getAllDrinks();
    public function getDrinkById(int $id): ?Drink;
    public function createDrink(array $data): Drink;
    public function updateDrink(Drink $drink, array $data): Drink;
    public function deleteDrink(Drink $drink);
    public function getDrinksList();
}
