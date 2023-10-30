<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Overtime;
class AdminOvertimeController extends Controller
{
    public function index()
    {
        $overtimeRecords = Overtime::all();
        return view('admin.overtime.index', ['overtimeRecords' => $overtimeRecords]);
  
    }

    
}
