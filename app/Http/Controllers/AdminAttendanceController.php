<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
class AdminAttendanceController extends Controller
{
    public function index()
    {
        $attendance= Attendance::all(); 
        return view('admin.attendance.index', ['attendances' => $attendance]);
    }
}
