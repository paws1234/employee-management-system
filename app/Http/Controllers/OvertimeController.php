<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Overtime;
use Auth;
use App\Models\User;
use App\Models\Employee;

class OvertimeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userId = $user->id - 1;
    
        $employees = Employee::all();
        $overtimeRecords = Overtime::where('employee_id', $userId)->get();
        return view('overtime.index', ['overtimeRecords' => $overtimeRecords, 'employees' => $employees]);
    }

  
    public function create()
    {
        $user = auth()->user();
        $users = User::all(); 
        
        if ($user) {
            return view('overtime.create', compact('user', 'users'));
        }
    }
    

    
    public function store(Request $request)
    {
        
        $users = User::all();
        $user = auth()->user();
            $request->validate([
                'employee_id' => 'required|exists:employees,id',
                'date' => 'required|date',
                'hours' => 'required|numeric|min:0',
               
            ]);
        
            $overtimeRecord = new Overtime();
            $overtimeRecord->employee_id = $user->id-1;
            $overtimeRecord->date = $request->input('date');
            $overtimeRecord->hours = $request->input('hours');
            $overtimeRecord->save();
        
            return redirect()->route('overtime.index')->with('success', 'Overtime record created successfully');
    }
    public function show($id)
    {
        $overtimeRecord = Overtime::find($id);
        return view('overtime.show', ['overtimeRecord' => $overtimeRecord]);
    }

    public function edit($id)
    {
        $overtimeRecord = Overtime::find($id);
        return view('overtime.edit', ['overtimeRecord' => $overtimeRecord]);
    }

    public function update(Request $request, $id)
{
    $user = auth()->user();
    
    $request->validate([
        'date' => 'required|date',
        'hours' => 'required|numeric|min:0',
    ]);

    $overtimeRecord = Overtime::find($id);



    $overtimeRecord->date = $request->input('date');
    $overtimeRecord->hours = $request->input('hours');

    $overtimeRecord->save();

    return redirect()->route('overtime.index')->with('success', 'Overtime record updated successfully');
}


    public function destroy($id)
    {
        
        $overtimeRecord = Overtime::find($id);
        $overtimeRecord->delete();

        return redirect()->route('overtime.index')->with('success', 'Overtime record deleted successfully');
    }
}

