<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Employee;


class EmployeesController extends Controller
{
    //
    public function show()
    {
         if (!Auth::check()) {
        return redirect()->route('login');
    }

    $employees = Employee::paginate(10); // or ->paginate(10)
    return view('admin.employees.index', compact('employees'));

    }
        
}
