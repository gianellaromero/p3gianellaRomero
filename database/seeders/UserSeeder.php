<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Gianella Romero', 
            'email' => 'romerogianella@gmail.com',
            'email_verified_at' => '2023-06-07 19:06:25',
            'password' => 'gianella',
            'remember_token' => '123456',
        ]);
        User::create([
            'name'=> 'Administrador', 
            'email' => 'admin@admin.com',
            'email_verified_at' => '2023-06-07 19:06:25',
            'password' => 'admin',
            'remember_token' => '4321',
        ]);
        
        
    }
}
