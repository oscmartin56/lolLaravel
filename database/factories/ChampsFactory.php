<?php

namespace Database\Factories;

use App\Models\Champs;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;

class ChampsFactory extends Factory
{
    protected $model = Champs::class;

    public function definition(): array
    {
        $champions = json_decode(File::get(database_path('factories/champs.json')), true);

        $name = array_map(fn($champion) => $champion['name'], $champions);
        return [
            'name' => fake()->unique()->randomElement($name),
            'region' => fake()->randomElement(['Demacia', 'Noxus', 'Ionia', 'Piltover', 'Zaun', 'Freljord', 'Shurima', 'Targon', 'The Void', 'Bilgewater', 'Bandle City', 'Shadow Isles']),
            'Rol' => fake()->randomElement(['Support', 'Adc', 'Mid', 'Jungla', 'Top']),
            'difficulty' => fake()->randomElement(['Easy', 'Medium', 'Hard']),
            'RPCost' => fake()->randomElement([450, 1350, 3150, 4800, 6300, 7800]),
        ];
    }
}
