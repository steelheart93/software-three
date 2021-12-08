<?php

namespace Database\Seeders;

use App\Models\User;
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
        // \App\Models\Cita::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'admin@123.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);
    }
}
