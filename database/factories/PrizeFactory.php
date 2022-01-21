<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PrizeFactory extends Factory
{
    private static $number = 1;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Nagroda '.self::$number,
            'image' => 'nagroda'.self::$number++.'.png',
            'price' => $this->faker->numberBetween(1,100),
            'code' => $this->faker->md5(),
            'status' => '0',
        ];
    }
}
