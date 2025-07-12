<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeesController extends Controller
{
    //
    public function show()
    {
        Auth::check() ? redirect()->route('employees') : redirect()->route('login');
        return view('admin.employees.index');

    }
}
