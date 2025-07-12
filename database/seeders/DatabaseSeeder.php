<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

     
    User::create([
        'name' => 'Test Admin',
        'email' => 'admin@example.com',
        'password' => Hash::make('admin123'), // known password
    ]);
     User::create([
        'name' => 'Second User',
        'email' => 'user@example.com',
        'password' => Hash::make('user123'),
    ]);


        $this->call(UserSeeder::class);
    }
}
