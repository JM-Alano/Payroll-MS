<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // BIGINT, Primary Key, auto-increment
            $table->unsignedBigInteger('user_id')->nullable(); // FK to users

            // Name fields
            $table->string('firstname');
            $table->string('middlename')->nullable();
            $table->string('lastname');

            // Employment info
            $table->string('email')->unique(); // Unique email for each employee
            $table->string('department');      // Department name
            $table->string('designation');     // Job title
            $table->date('join_date');         // Join date
            $table->decimal('salary', 10, 2);  // Gross Salary

            // Bank info
            $table->string('bank_account');    // Bank account number
            $table->string('ifsc_code');       // IFSC code

            // Status
            $table->enum('employment_type', ['permanent', 'contract', 'temporary']); // Employment type
            $table->enum('status', ['active', 'left', 'terminated']); // Employment status

            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_employee');
    }
};
