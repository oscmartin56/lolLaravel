<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Champs;

class ChampSeeder extends Seeder
{
    public function run(): void
    {
        Champs::factory(10)->create();
    }
}
