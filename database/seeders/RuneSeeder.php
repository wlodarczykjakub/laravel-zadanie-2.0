<?php

namespace Database\Seeders;

use App\Models\Rune;
use Illuminate\Database\Seeder;

class RuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rune::factory(10)->create();
    }
}
