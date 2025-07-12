<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayslipsController extends Controller
{
    //
    public function show()
    {
        auth()->check() ? redirect()->route('payslips') : redirect()->route('login');
        return view('admin.payslips.index');
    }
}
