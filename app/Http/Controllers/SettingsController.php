<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //
    public function show()
    {
        auth()->check() ? redirect()->route('settings') : redirect()->route('login');
        return view('admin.settings.index');
    }
}
