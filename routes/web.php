<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeDetailsController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\EmployeeContactController;
use App\Http\Controllers\EmployeeAttendanceController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[FrontEndController::class,'index'])->name('/');
Route::post('/emplyoee-login',[EmployeeController::class,'emplyoeeLogin'])->name('emplyoee-login');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/add-employee',[EmployeeController::class,'addEmployee'])->name('add-employee');
    Route::post('/new-employee',[EmployeeController::class,'saveEmployee'])->name('new-employee');
    Route::get('/manage-employee',[EmployeeController::class,'manageEmployee'])->name('manage-employee');
    Route::get('/status/{id}',[EmployeeController::class,'status'])->name('status');
    Route::get('/edit-employee/{id}',[EmployeeController::class,'editEmployee'])->name('edit-employee');
    Route::post('/update-employee',[EmployeeController::class,'updateEmployee'])->name('update-employee');
    Route::post('/delete-employee',[EmployeeController::class,'deleteEmployee'])->name('delete-employee');
    Route::get('/add-employeeDetails',[EmployeeDetailsController::class,'addEmployeeDetails'])->name('add-employeeDetails');
    Route::get('/manage-employeeDetails',[EmployeeDetailsController::class,'manageEmployeeDetails'])->name('manage-employeeDetails');
    Route::post('/new-employeeDetails',[EmployeeDetailsController::class,'saveEmployeeDetails'])->name('new-employeeDetails');
    Route::get('/edit-employeeDetails/{id}',[EmployeeDetailsController::class,'editEmployeeDetails'])->name('edit-employeeDetails');
    Route::post('/update-employeeDetails',[EmployeeDetailsController::class,'updateEmployeeDetails'])->name('update-employeeDetails');
    Route::post('/delete-employeeDetails',[EmployeeDetailsController::class,'deleteEmployeeDetails'])->name('delete-employeeDetails');
    Route::get('/add-employeeContact',[EmployeeContactController::class,'addEmployeeContact'])->name('add-employeeContact');
    Route::post('/new-employeeContact',[EmployeeContactController::class,'saveEmployeeContact'])->name('new-employeeContact');
    Route::get('/manage-employeeContact',[EmployeeContactController::class,'manageEmployeeContact'])->name('manage-employeeContact');
    Route::get('/edit-employeeContact/{id}',[EmployeeContactController::class,'editEmployeeContact'])->name('edit-employeeContact');
    Route::post('/update-employeeContact',[EmployeeContactController::class,'updateEmployeeContact'])->name('update-employeeContact');
    Route::post('/delete-employeeContact',[EmployeeContactController::class,'deleteEmployeeContact'])->name('delete-employeeContact');
    Route::get('/employeeAttendance',[EmployeeAttendanceController::class,'employeeAttendance'])->name('employeeAttendance');
    Route::get('/edit-attendance/{id}',[EmployeeAttendanceController::class,'editEmployeeAttendance'])->name('edit-attendance');
    Route::post('/delete-attendance',[EmployeeAttendanceController::class,'deleteAttendance'])->name('delete-attendance');
    Route::post('/update-attendance',[EmployeeAttendanceController::class,'updateAttendance'])->name('update-attendance');

});
