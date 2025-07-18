<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory(10)->create();

        User::updateOrCreate([
            'name' => 'Test Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'), // known password
        ]);
        User::updateOrCreate([
            'name' => 'Second User',
            'email' => 'user@example.com',
            'password' => Hash::make('user123'),
        ]);
    }
}
