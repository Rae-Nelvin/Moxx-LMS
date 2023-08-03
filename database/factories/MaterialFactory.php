<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'materialGroupID' => $this->faker->numberBetween(1, 20),
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'file' => $this->faker->text(),
        ];
    }
}
