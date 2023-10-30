<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Employee;
class ScheduleController extends Controller
{
    
    public function index()
    {
        $schedules = Schedule::all();
        $users = User::all();
        return view('schedule.index', ['schedules' => $schedules, 'users' => $users]);
        
    }


    public function create()
    {
        $schedules = Schedule::all();
        $users = User::all();
        return view('schedule.create',['schedules' => $schedules, 'users' => $users]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'day' => 'required|string|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
        ]);
        
        $employeeId = $request->input('employee_id'); // Get the selected employee's ID from the form
    
        $schedule = new Schedule(); 
        $schedule->employee_id = $employeeId; // Assign the selected employee's ID
        $schedule->day = $request->input('day');
        $schedule->start_time = $request->input('start_time');
        $schedule->end_time = $request->input('end_time');
    
        $schedule->save();
    
        return redirect()->route('schedule.index')->with('success', 'Schedule created successfully');
    }
    



    public function show($id)
    {
        $schedule = Schedule::with('employee')->find($id);
        return view('schedule.show', ['schedule' => $schedule]);
    }

  
    public function edit($id)
    {
        
        $schedule = Schedule::find($id);
        $users = User::all();
        return view('schedule.edit',['schedule' => $schedule, 'users' => $users]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'day' => 'nullable|string|in:Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday',
            'start_time' => 'nullable|date_format:H:i',
            'end_time' => 'nullable|date_format:H:i|after_or_equal:start_time',
        ]);
        
        $schedule = Schedule::find($id);
    
        if ($request->has('day')) {
            $schedule->day = $request->input('day');
        }
    
        if ($request->has('start_time')) {
            $schedule->start_time = $request->input('start_time');
        }
    
        if ($request->has('end_time')) {
            $schedule->end_time = $request->input('end_time');
        }
    
        if ($request->has('employee_id')) {
            $schedule->employee_id = $request->input('employee_id');
        }
    
        $schedule->save();
    
        return redirect()->route('schedule.index')->with('success', 'Schedule updated successfully');
    }
    
    
   
    public function destroy($id)
    {
       
        $schedule = Schedule::find($id);
        $schedule->delete();

        return redirect()->route('schedule.index')->with('success', 'Schedule deleted successfully');
    }
}
