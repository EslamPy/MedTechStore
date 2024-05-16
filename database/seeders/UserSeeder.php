<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::create([
            'name' => 'admin',
            'email' => 'example@gmail.com',
            'password' => bcrypt('123456'),
            'is_admin' => true
        ]);
    }
}
