<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserCourseFactory extends Factory
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
            'totalMaterialsDone' => $this->faker->numberBetween(0, 100),
        ];
    }
}
