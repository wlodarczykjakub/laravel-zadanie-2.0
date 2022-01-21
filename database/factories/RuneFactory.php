<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RuneFactory extends Factory
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
            'name' => 'Runa '.self::$number,
            'image' => 'runa'.self::$number.'.png',
            'price' => $this->faker->numberBetween(1,100),
            'bonus' => 'jakis bonus '.self::$number++,
        ];
    }
}
