<?php

namespace Database\Factories;

use App\Models\Champs;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChampsFactory extends Factory
{
    protected $model = Champs::class;

    public function definition(): array
    {
        return [
            'name' => fake()->unique()->word(),
            'region' => fake()->randomElement(['Demacia', 'Noxus', 'Ionia', 'Piltover', 'Zaun', 'Freljord', 'Shurima', 'Targon', 'The Void', 'Bilgewater', 'Bandle City', 'Shadow Isles']),
            'rol' => fake()->randomElement(['Tank', 'Mage', 'Assassin', 'Marksman', 'Support', 'Fighter']),
            'difficulty' => fake()->randomElement(['Easy', 'Medium', 'Hard']),
            'RPCost' => fake()->randomElement([450, 1350, 3150, 4800, 6300, 7800]),
        ];
    }
}
