<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    //
    public function show()
    {
        auth()->check() ? redirect()->route('reports') : redirect()->route('login');
        return view('admin.reports.index');
    }
}
