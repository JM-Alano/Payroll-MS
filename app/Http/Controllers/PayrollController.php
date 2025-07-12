<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayrollController extends Controller
{
    //
    public function show()
    {
        auth()->check() ? redirect()->route ('payroll') : redirect()->route('login');
        return view('admin.payroll.index');
    }
}
