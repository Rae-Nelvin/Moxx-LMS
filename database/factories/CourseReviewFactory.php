<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CourseReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'userID' => $this->faker->numberBetween(2, 13),
            'courseID' => $this->faker->numberBetween(1, 5),
            'reviews' => $this->faker->paragraph(),
            'stars' => $this->faker->numberBetween(1, 5),
        ];
    }
}
