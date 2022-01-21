<?php

namespace Database\Seeders;

use App\Models\Chest;
use Illuminate\Database\Seeder;

class ChestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chest::factory(10)->create();
    }
}
