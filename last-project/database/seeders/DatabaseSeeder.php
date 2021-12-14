<?php

namespace Database\Seeders;

use App\Models\Cita;
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
        User::create([
            'name' => 'admin',
            'email' => 'admin@123.com',
            'email_verified_at' => now(),
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'employee',
            'email' => 'employee@123.com',
            'email_verified_at' => now(),
            'password' => Hash::make('employee123'),
            'role' => 'employee',
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@123.com',
            'email_verified_at' => now(),
            'password' => Hash::make('user123'),
            'role' => 'user',
        ]);
        User::factory(4)->create();

        $this->call(CitaSeeder::class);
        Cita::factory(20)->create();
    }
}
