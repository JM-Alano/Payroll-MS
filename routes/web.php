<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PayslipsController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ReportsController;


// Public Routes
Route::middleware(['guest', 'admin_user'])->group(function () {

    Route::get('/', function () {
    return view ('index');
    });

    // Show login form;
    Route::get('/login', [LoginController::class, 'show'])->name('login');
    Route::post('/login/process', [LoginController::class, 'process'])->name('login.process');
});


  // Logout route
    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');



// Protected Routes with PreventBack middleware
Route::middleware(['auth', 'admin_user'])->group(function () {
    // Dashboard route
    Route::get('/admin/dashboard', [DashboardController::class, 'show'])->name('dashboard');
      Route::get('/admin/employees', [EmployeesController::class, 'show'])->name('employees');
        Route::get('/admin/payroll', [PayrollController::class, 'show'])->name('payroll');
          Route::get('/admin/payslips', [PayslipsController::class, 'show'])->name('payslips');
              Route::get('/admin/leave', [LeaveController::class, 'show'])->name('leave');
                Route::get('/admin/reports', [ReportsController::class, 'show'])->name('reports');
                   Route::get('/admin/settings', [SettingsController::class, 'show'])->name('settings');
                      Route::get('/admin/reports', [ReportsController::class, 'show'])->name('reports');
                           Route::get('/admin/_ess', [DashboardController::class, 'event'])->name('event');
             


              
});
