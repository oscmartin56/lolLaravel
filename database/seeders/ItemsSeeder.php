<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Items;

class ItemsSeeder extends Seeder
{

    public function run(): void
    {
        Items::factory(18)->create();

    }
}
