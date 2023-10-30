<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Employee;
class AttendanceController extends Controller
{
   
    public function index() {
       
        $user = Auth::user();
        $userId = $user->id-1;
        $attendances = Attendance::where('employee_id', $userId)->get();
    
        return view('attendance.index', compact('attendances'));
    }
    
    

    public function create()
{
    $user = auth()->user();

    if ($user) {
        return view('attendance.create', ['user' => $user]);
    }

    return view('home', ['user' => null]);
}

public function store(Request $request)
{
    
    $user = $request->user();

   
    $request->validate([
        'date' => 'required|date',
        'check_in_time' => 'required',
        'check_out_time' => 'required',
    ]);

    if ($user) {
        
        $attendance = new Attendance();
        $attendance->employee_id = $user->id-1;
        $attendance->date = $request->input('date');
        $attendance->check_in_time = $request->input('check_in_time');
        $attendance->check_out_time = $request->input('check_out_time');

  
        try {
            $attendance->save();
        } catch (\Exception $e) {
            
            return redirect()->back()->with('error', 'Failed to save attendance record: ' . $e->getMessage());
        }

        return redirect()->route('attendance.index')->with('success', 'Attendance record created successfully');
    } else {
        return redirect()->route('home')->with('error', 'Unable to create an attendance record');
    }
}


    


   
public function show()
{
    $user = Auth::user();
    $attendance = Attendance::where('employee_id', $user->id-1)->first();

    if ($attendance) {
        return view('attendance.show', ['attendance' => $attendance]);
    } else {
        return view('attendance.show', ['attendance' => null]);
    }
}
   
    public function edit($id)
    {
        $attendance = Attendance::find($id);
        return view('attendance.edit', ['attendance' => $attendance]);
    }


    public function update(Request $request, $id)
    {
        
        $user = $request->user();
    
     
        $request->validate([
            'date' => 'required|date',
            'check_in_time' => 'required',
            'check_out_time' => 'required',
        ]);
    
        if ($user) {
            
            $attendance = Attendance::find($id);
    
            if ($attendance) {
               
                $attendance->employee_id = $user->id-1; 
                $attendance->date = $request->input('date');
                $attendance->check_in_time = $request->input('check_in_time');
                $attendance->check_out_time = $request->input('check_out_time');
    
          
                try {
                    $attendance->save();
                    return redirect()->route('attendance.index')->with('success', 'Attendance record updated successfully');
                } catch (\Exception $e) {
                   
                    return redirect()->back()->with('error', 'Failed to update attendance record: ' . $e->getMessage());
                }
            } else {
                return redirect()->route('attendance.index')->with('error', 'Attendance record not found');
            }
        } else {
            return redirect()->route('attendance.edit', $id)->with('error', 'Unable to update an attendance record');
        }
    }
    
    public function destroy($id)
    {
       
        $attendance = Attendance::find($id);
        $attendance->delete();

        return redirect()->route('attendance.index')->with('success', 'Attendance record deleted successfully');
    }
}
