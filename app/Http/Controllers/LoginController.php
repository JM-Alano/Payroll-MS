<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {   
       if (Auth::check()) 
        return redirect()->route('dashboard');
    
        return view('auth.login');
    }

    public function process(Request $request)
    {
        // Validate input
        $credentials = $request->only('email', 'password');

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $request->session()->flash('message', 'Logged in successfully!');
            return redirect()->intended('/admin/dashboard');
           
        }

        // Authentication failed
        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
            'password' => 'The provided credentials do not match our records.',
        ])->withInput(['email' , 'password']);

      
    }

}
