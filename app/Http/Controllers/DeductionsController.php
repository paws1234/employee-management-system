<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deduction;

class DeductionsController extends Controller
{
  
    public function index()
    {
        $deductions = Deduction::all();
        return view('deductions.index', ['deductions' => $deductions]);
    }

   
    public function create()
    {
        return view('deductions.create');
    }

    
    public function store(Request $request)
    {
        
        $request->validate([
            'name' => 'required|string',
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
            
        ]);

      
        $deduction = new Deduction();
        $deduction->name = $request->input('name');
        $deduction->amount = $request->input('amount');
        $deduction->description = $request->input('description');
        
        $deduction->save();

        return redirect()->route('deductions.index')->with('success', 'Deduction record created successfully');
    }

    
    public function show($id)
    {
        $deduction = Deduction::find($id);
        return view('deductions.show', ['deduction' => $deduction]);
    }

    public function edit($id)
    {
        $deduction = Deduction::find($id);
        return view('deductions.edit', ['deduction' => $deduction]);
    }

    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => 'required|string',
            'amount' => 'required|numeric',
            'description' => 'nullable|string',
          
        ]);

     
        $deduction = Deduction::find($id);
        $deduction->name = $request->input('name');
        $deduction->amount = $request->input('amount');
        $deduction->description = $request->input('description');
        $deduction->save();

        return redirect()->route('deductions.index')->with('success', 'Deduction record updated successfully');
    }

   
    public function destroy($id)
    {
       
        $deduction = Deduction::find($id);
        $deduction->delete();

        return redirect()->route('deductions.index')->with('success', 'Deduction record deleted successfully');
    }
}
