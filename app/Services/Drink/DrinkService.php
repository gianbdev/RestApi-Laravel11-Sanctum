<?php

namespace App\Services;

use App\Models\Drink;
use App\Repository\DrinkRepository;

class DrinkService
{
    protected $drinkRepository;
    /**
     * Create a new class instance.
     */
    public function __construct(DrinkRepository $drinkRepository)
    {
        $this->drinkRepository = $drinkRepository;
    }

    public function getAllDrinks()
    {
        return $this->drinkRepository->getClients();
    }

    public function getDrinkById(int $id): ?Drink
    {
        return $this->drinkRepository->findClientById($id);
    }

    public function createDrink(array $data): Drink
    {
        return Drink::create($data);
    }

    public function updateDrink(Drink $drink, array $data): Drink
    {
        $drink->update($data);
        return $drink;
    }

    public function deleteDrink(Drink $drink)
    {
        $drink->delete();
    }

    public function getDrinkList()
    {
        return $this->drinkRepository->drinksList();
    }
}
