<?php

namespace Database\Seeders;

use App\Models\CourseType;
use Illuminate\Database\Seeder;

class CourseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseType::create([
            'name' => 'type 1'
        ]);

        CourseType::create([
            'name' => 'type 2'
        ]);

        CourseType::create([
            'name' => 'type 3'
        ]);

        CourseType::create([
            'name' => 'type 4'
        ]);

        CourseType::create([
            'name' => 'type 5'
        ]);
    }
}
