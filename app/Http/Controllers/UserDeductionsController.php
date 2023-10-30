<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deduction;

class UserDeductionsController extends Controller
{
    public function index()
    {
        $deductions = Deduction::all();
    return view('user.deductions.index', ['deductions' => $deductions]);
    }
    
}