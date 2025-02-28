<?php

namespace Database\Factories;

use App\Models\Champs;
use App\Models\Items;
use Database\Seeders\ItemsSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\File;


class ItemsFactory extends Factory
{
    protected $model = Items::class;

    public function definition(): array
    {
        $items = json_decode(File::get(database_path('factories/items.json')), true);
        $champs = Champs::all();
        $champ = $champs->random();

        $name = array_map(fn($items) => $items['name'], $items);

        return [
            'name' => fake()->unique()->randomElement($name),
            'damage' => fake()->randomElement(["+10dmg", "+20dmg", "+30dmg", "+40dmg", "+50dmg", "+60dmg"]),
            'id_champs' => $champ->id,
        ];
    }
}
