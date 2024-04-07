<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\EmployeeDashboardController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/services', [ServiceController::class, 'display_services'])->name('customer.services');
Route::get('/services/{id}', [ServiceController::class, 'display_service'])->name('customer.service');

Route::group(['middleware' => ['role:admin']], function () {
    // Routes accessible only by users with the 'admin' role
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'dashboard'])->name('admin.dashboard');
});

Route::group(['middleware' => ['role:employee']], function () {
    // Routes accessible only by users with the 'employee' role
    Route::get('/employee/dashboard', [EmployeeDashboardController::class, 'dashboard'])->name('employee.dashboard');
});

Route::group(['middleware' => ['role:customer']], function () {
    // Routes accessible only by users with the 'customer' role
});