<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;

Route::group(['middleware' => ['auth', ]], function () {
    
    Route::get('/admin/dashboard', function () {
        return view('dashboard.admin');
    })->name('admin.dashboard');
    Route::get('/admin/employees', 'App\Http\Controllers\EmployeeController@index')->name('admin.employees');
    
    Route::get('/user/dashboard', function () {
        return view('dashboard.user');
    })->name('user.dashboard');
    Route::middleware(['admin'])->group(function () {
        Route::get('/admin/dashboard', 'AdminController@index')->name('admin.dashboard');
     
    });

    Route::get('/admin/attendance/index', [App\Http\Controllers\AdminAttendanceController::class, 'index'])
    ->name('admin.attendance.index');
    Route::get('/admin/overtime/index', 'App\Http\Controllers\AdminOvertimeController@index')->name('admin.overtime.index');

    Route::get('/user/attendance', 'App\Http\Controllers\AttendanceController@index')->name('user.attendance');
Route::get('/attendance/create', [AttendanceController::class, 'create'])->name('attendance.create');
Route::post('/attendance', [AttendanceController::class, 'store'])->name('attendance.store');
Route::get('/attendance', [AttendanceController::class, 'index'])->name('attendance.index');
Route::get('/attendance/{id}', [AttendanceController::class, 'show'])->name('attendance.show');
Route::get('/attendance/{id}/edit', [AttendanceController::class, 'edit'])->name('attendance.edit');
Route::put('/attendance/{id}', [AttendanceController::class, 'update'])->name('attendance.update');
Route::delete('/attendance/{id}', [AttendanceController::class, 'destroy'])->name('attendance.destroy');
Route::get('/user/schedule', 'App\Http\Controllers\userscheduleController@index')->name('user.schedule.index');
});

Route::resource('employees', 'App\Http\Controllers\EmployeeController');
Route::post('/employees', 'App\Http\Controllers\EmployeeController@store')->name('employees.store');

Route::delete('employees/{id}', 'App\Http\Controllers\EmployeeController@destroy')->name('employees.destroy');

Route::resource('cashadvance', 'App\Http\Controllers\CashAdvanceController');
Route::get('/user/cashadvances', 'App\Http\Controllers\UserCashAdvanceController@index')->name('user.cashadvances');

Route::resource('positions', 'App\Http\Controllers\PositionController');
Route::get('/user/position', 'App\Http\Controllers\UserPositionController@index')->name('user.position.index');



Route::get('/schedule', [App\Http\Controllers\ScheduleController::class, 'index'])->name('schedule.index');
Route::get('/schedule/create', [App\Http\Controllers\ScheduleController::class, 'create'])->name('schedule.create');
Route::post('/schedule', [App\Http\Controllers\ScheduleController::class, 'store'])->name('schedule.store');
Route::get('/schedule/{id}', [App\Http\Controllers\ScheduleController::class, 'show'])->name('schedule.show');
Route::get('/schedule/{id}/edit', [App\Http\Controllers\ScheduleController::class, 'edit'])->name('schedule.edit');
Route::put('/schedule/{id}', [App\Http\Controllers\ScheduleController::class, 'update'])->name('schedule.update');
Route::delete('/schedule/{id}', [App\Http\Controllers\ScheduleController::class, 'destroy'])->name('schedule.destroy');
Route::resource('deductions', App\Http\Controllers\DeductionsController::class);

Route::get('/user/deductions', 'App\Http\Controllers\UserDeductionsController@index')->name('user.deductions.index');
Route::resource('overtime', 'App\Http\Controllers\OvertimeController');
Route::get('/deduct-cash-advance', 'App\Http\Controllers\PositionController@deductCashAdvanceView')->name('show.payslip');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
