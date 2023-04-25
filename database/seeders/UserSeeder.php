<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'Fname' => 'Pak Raja',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'phone' => '0817272727',
            'profileIMG' => null,
            'role' => 'admin',
        ]);
    }
}
