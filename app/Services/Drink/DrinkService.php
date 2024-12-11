<?php

namespace App\Services\Drink;

use App\Models\Drink;
use App\Repository\Drink\DrinkRepositoryInterface;

class DrinkService implements DrinkServiceInterface
{
    protected $drinkRepository;
    /**
     * Create a new class instance.
     */
    public function __construct(DrinkRepositoryInterface $drinkRepository)
    {
        $this->drinkRepository = $drinkRepository;
    }

    public function getAllDrinks()
    {
        return $this->drinkRepository->getDrinks();
    }

    public function getDrinkById(int $id): ?Drink
    {
        return $this->drinkRepository->findDrinkById($id);
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

    public function getDrinksList()
    {
        return $this->drinkRepository->drinksList();
    }
}
