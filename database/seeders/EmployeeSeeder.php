<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        // Optionally clear the table first
        // DB::table('employees')->truncate();

        for ($i = 1; $i <= 10; $i++) {
           Employee::create([
            'user_id' => rand(1, 50),
            'firstname' => fake()->firstName(),
            'middlename' => rand(0, 1) ? fake()->firstName() : null,
            'lastname' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'department' => fake()->randomElement(['HR', 'IT', 'Finance', 'Operations']),
            'designation' => fake()->jobTitle(),
            'join_date' => fake()->date('Y-m-d', 'now'),
            'salary' => fake()->randomFloat(2, 30000, 90000),
            'bank_account' => fake()->numerify('###########'),
            'ifsc_code' => strtoupper(fake()->bothify('????0#####')),
            'employment_type' => fake()->randomElement(['permanent', 'contract', 'temporary']),
            'status' => fake()->randomElement(['active', 'left', 'terminated']),
        ]);

        }
    }
}
