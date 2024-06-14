<?php

namespace Database\Seeders;

use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'email' => 'ziadtallat33@gmail.com',
            'password' => bcrypt('ziadxddd'),
            'role' => 'admin',
        ]);

        Status::create([
            'name' => 'website'
        ]);

        Status::create([
            'name' => 'ai_model'
        ]);
    }
}
