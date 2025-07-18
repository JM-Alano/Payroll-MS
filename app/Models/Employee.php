<?php
// app/Models/Employee.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeesModel;

class Employee extends Model
{
    protected $fillable = [
        'user_id', 'firstname', 'middlename', 'lastname', 'email',
        'department', 'designation', 'join_date', 'salary',
        'bank_account', 'ifsc_code', 'employment_type', 'status'
    ];

}