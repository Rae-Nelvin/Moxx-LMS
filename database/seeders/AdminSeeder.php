<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'leonardowijaya11',
            'name' => 'Leonardo Wijaya',
            'email' => 'leonardo.wijaya003@binus.ac.id',
            'password' => Hash::make('admin123'),
            'phone' => '081330229959',
            'roleID' => 1,
        ]);

        User::create([
            'username' => 'Guest1',
            'name' => 'Guest 1',
            'email' => 'guest1@binus.ac.id',
            'password' => Hash::make('guest123'),
            'phone' => '081330229959',
            'roleID' => 2,
        ]);
    }
}
