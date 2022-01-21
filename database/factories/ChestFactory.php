<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ChestFactory extends Factory
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
            'name' => 'Skrzynia '.self::$number,
            'image' => 'skrzynia'.self::$number++.'.png',
            'price' => $this->faker->numberBetween(1,100),
        ];
    }
}
