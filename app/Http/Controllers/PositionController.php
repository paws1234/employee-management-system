<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;
use App\Models\User;
use App\Models\CashAdvance;
use App\Models\Overtime; 
use App\Models\Deduction;
use App\Models\Payslip;
use auth;

class PositionController extends Controller
{
   
    public function index()
    {
        $positions = Position::all();
        return view('positions.index', ['positions' => $positions]);
    }

   
    public function create()
    {
        $users = User::all(); 
        return view('positions.create', ['users' => $users]);
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'salary' => 'required|numeric',
            'employee' => 'required|string|max:255',
        ]);
    
        $userName = $request->input('employee');
    
        $user = User::where('name', $userName)->first();
    
        if ($user) {
            $position = new Position();
            $position->title = $request->input('title');
            $position->description = $request->input('description');
            $position->salary = $request->input('salary');
            $position->employee = $userName;
            $position->user_id = $user->id;
            $position->save();
    
        
            $payslip = new Payslip();
            $payslip->user_id = $user->id;
            $payslip->pay = $request->input('salary')*8; 
            $payslip->save();
    
            return redirect()->route('positions.index')->with('success', 'Position created successfully');
        } else {
            return redirect()->route('positions.index')->with('error', 'Selected user not found.');
        }
    }
    
    
   
    public function show($id)
    {
        $position = Position::find($id);
        return view('positions.show', ['position' => $position]);
    }

 
    public function edit($id)
    {
        $position = Position::find($id);
        $users = User::all(); 
        return view('positions.edit', ['position' => $position,'users' => $users]);
    }

   
    public function update(Request $request, $id)
    {
       
       $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'salary' => 'required|numeric',
            'employee' => 'required|string|max:255',
        ]);

        $userName = $request->input('employee');
    
        $user = User::where('name', $userName)->first();
        $position = Position::find($id);
        $position->title = $request->input('title');
            $position->description = $request->input('description');
            $position->salary = $request->input('salary');
            $position->employee = $userName; 
            $position->user_id = $user->id; 
        $position->save();

        return redirect()->route('positions.index')->with('success', 'Position updated successfully');
    }

   
    public function destroy($id)
    {
        
        $position = Position::find($id);
        $position->delete();

        return redirect()->route('positions.index')->with('success', 'Position deleted successfully');
    }

    public function deductCashAdvanceAndOvertimeFromSalary()
    {
        $loggedInUserId = Auth::id();
        $payslip = Payslip::where('user_id', $loggedInUserId)->first();
        
        $position = Position::where('user_id', $loggedInUserId)->first();
        if ($payslip && $position) {
            $cashAdvance = CashAdvance::where('employee_id', $loggedInUserId - 1)->sum('amount');
            $overtimeHours = Overtime::where('employee_id', $loggedInUserId - 1)->sum('hours');
            $deductionsTotal = Deduction::sum('amount');
        
            if ($cashAdvance > 0) {
                $payslip->pay -= $cashAdvance;
                $payslip->save();
                CashAdvance::where('employee_id', $loggedInUserId - 1)->update(['amount' => 0]);
            }
        
            if ($overtimeHours > 0) {
        
                $overtimeDeduction = $position->salary * $overtimeHours; 
                $payslip->pay+= $overtimeDeduction;
                $payslip->save();
            }
        
            if ($deductionsTotal > 0) {
                $deductionTotal = $payslip->pay * ($deductionsTotal / 100); 
                $payslip->pay -= $deductionTotal;
                $payslip->save();
            }
        
            $cashAdvanceDeduction = $cashAdvance; 
            $overtimeEarnings = $overtimeDeduction; 
            $deductionsTotal = $deductionTotal; 
        
            $data = [
                'pay' => $payslip->pay,
                'cashAdvanceDeduction' => $cashAdvanceDeduction,
                'overtimeEarnings' => $overtimeEarnings,
                'deductionsTotal' => $deductionsTotal,
            ];
        
            return $data;
        }
    }
    
    


    
    public function deductCashAdvanceView()
    {
       
        $result = (object)$this->deductCashAdvanceAndOvertimeFromSalary();

        return view('payslip', ['result' => $result]);
    }

}
