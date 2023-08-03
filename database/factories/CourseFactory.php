<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class CourseFactory extends Factory
{
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'courseTypeID' => $this->faker->numberBetween(1, 5),
            'creatorID' => 1,
            'price' => $this->faker->randomFloat(2, 10, 100),
            'isActive' => Arr::random(Course::IS_ACTIVE_VALUES),
        ];
    }
}
