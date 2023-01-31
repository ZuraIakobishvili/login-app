<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Models\User::factory()->create();
        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('555555')
        ]);

        
        \App\Models\Admin::factory()->create();
        \App\Models\Admin::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('555555')
        ]);

        
        \App\Models\Teacher::factory()->create();
        \App\Models\Teacher::factory()->create([
            'name' => 'Teacher',
            'email' => 'teacher@gmail.com',
            'password' => Hash::make('555555')
        ]);
    }
}
