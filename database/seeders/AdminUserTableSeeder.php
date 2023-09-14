<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Dieng Marathon',
            'email' => 'admindieng@example.com', 
            'password' => bcrypt('randomstring'), 
            'role' => 'Admin',
        ]);
    }
}
