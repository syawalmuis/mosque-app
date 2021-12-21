<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SumbanganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'value' => 50000
        ];
    }
}
