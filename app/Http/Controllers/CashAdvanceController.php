<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CashAdvance;
use App\Models\Employee;
class CashAdvanceController extends Controller
{
   
    public function index()
    {
        $cashAdvances = CashAdvance::all();
        return view('cashadvance.index', ['cashAdvances' => $cashAdvances]);
    }

    
    public function create()
    {
        $employees = Employee::all(); 
    
        return view('cashadvance.create', ['employees' => $employees]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
            
        ]);

  
        $cashAdvance = new CashAdvance();
        $cashAdvance->employee_id = $request->input('employee_id');
        $cashAdvance->amount = $request->input('amount');
        $cashAdvance->date = $request->input('date');
        $cashAdvance->save();

        return redirect()->route('cashadvance.index')->with('success', 'Cash advance record created successfully');
    }

    public function show($id)
    {
        
        $cashAdvance = CashAdvance::find($id);
        $employees = Employee::all(); 
        return view('cashadvance.show', ['cashAdvance' => $cashAdvance]);
    }

    
    public function edit($id)
    {
        $cashAdvance = CashAdvance::find($id);
        $employees = Employee::all(); 
    
        return view('cashadvance.edit', ['cashAdvance' => $cashAdvance, 'employees' => $employees]);
    }
    public function update(Request $request, $id)
    {
       
        $request->validate([
            'employee_id' => 'required|exists:employees,id',
            'amount' => 'required|numeric|min:0',
            'date' => 'required|date',
        ]);

        
        $cashAdvance = CashAdvance::find($id);
        $cashAdvance->employee_id = $request->input('employee_id');
        $cashAdvance->amount = $request->input('amount');
        $cashAdvance->date = $request->input('date');
        $cashAdvance->save();

        return redirect()->route('cashadvance.index')->with('success', 'Cash advance record updated successfully');
    }

   
    public function destroy($id)
    {
      
        $cashAdvance = CashAdvance::find($id);
        $cashAdvance->delete();

        return redirect()->route('cashadvance.index')->with('success', 'Cash advance record deleted successfully');
    }
}
