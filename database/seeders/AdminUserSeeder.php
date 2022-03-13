<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'admin',
            'name' => 'admin',
            'email' => 'admin@lms.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => \bcrypt('admin'),
            'is_admin' => (true)
        ]);
    }
}