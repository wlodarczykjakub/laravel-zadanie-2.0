<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ChestSeeder::class);
        $this->call(RuneSeeder::class);
        $this->call(PrizeSeeder::class);
    }
}
