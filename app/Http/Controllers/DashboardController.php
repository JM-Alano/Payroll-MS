<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

      public function show()
    {
        Auth::check() ? redirect()->route('dashboard') : redirect()->route('login');
       
        
        
        return view('admin.dashboard.index');
    }    
   
}
