<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\CoursePhoto;
use App\Models\CourseReview;
use App\Models\Material;
use App\Models\MaterialGroup;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\UserCourse;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            CourseTypeSeeder::class,
        ]);

        User::factory()->count(11)->create();
        UserAddress::factory()->count(10)->create();
        Course::factory()->count(5)->create();
        MaterialGroup::factory()->count(20)->create();
        Material::factory()->count(100)->create();
        CourseReview::factory()->count(50)->create();
        UserCourse::factory()->count(10)->create();
        CoursePhoto::factory()->count(20)->create();
        Transaction::factory()->count(10)->create();
    }
}
