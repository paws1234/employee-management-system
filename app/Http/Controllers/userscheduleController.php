<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Schedule;
use App\Models\User;
class userscheduleController extends Controller
{
    public function index()
{

    $user = Auth::user();
    $schedules = Schedule::where('employee_id', $user->id)->get();
   
    return view('user.schedule.index', ['schedules' => $schedules]);
   
}
}
