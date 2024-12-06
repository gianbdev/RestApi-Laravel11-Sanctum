<?php

namespace App\Http\Controllers\Drink;

use App\Http\Controllers\Controller;
use App\Http\Resources\Drink\DrinkResource;
use App\Services\DrinkService;

class DrinkController extends Controller
{
    protected $drinkService;

    public function __construct(DrinkService $drinkService)
    {
        $this->drinkService = $drinkService;
    }

    public function index()
    {
        $drinks = $this->drinkService->getAllDrinks();
        return DrinkResource::collection($drinks);
    }
}
