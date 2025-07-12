<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveController extends Controller
{
    //
    public function show()
    {
        auth()->check() ? redirect()->route('leave') : redirect()->route('login');
        return view('admin.leave.index');
    }
}
