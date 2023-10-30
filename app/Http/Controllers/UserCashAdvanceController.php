<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CashAdvance;
use Auth;

class UserCashAdvanceController extends Controller
{
    public function index()
    {
        $user = Auth::user();
    
        $employeeId = $user->id-1; 
    
        $cashAdvances = CashAdvance::where('employee_id', $employeeId)->get();
        return view('user.cashadvances.index', compact('cashAdvances'));
    }
    
    
}
