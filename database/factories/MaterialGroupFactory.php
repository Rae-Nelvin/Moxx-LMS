<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'courseID' => $this->faker->numberBetween(1, 5),
            'title' => $this->faker->sentence(),
        ];
    }
}
