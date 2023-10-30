<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Support\Str;
class EmployeeController extends Controller
{
  
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', ['employees' => $employees]);
    }

    
    public function create()
    {
        return view('employees.create');
    }

   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|unique:employees,email',
            'phone' => 'required|max:20',
            'address' => 'required',
        ]);
    
     
        $user = User::where('email', $request->input('email'))->first();
    
        if (!$user) {
            $generatedPassword = Str::random(12);
            $user = User::create([
                'name' => $request->input('first_name'),
                'email' => $request->input('email'),
                'password' => bcrypt($generatedPassword),
            ]);
        }
    
        $employee = new Employee();
        $employee->user_id = $user->id;
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->address = $request->input('address');
        $employee->save();
    
      
        $user->name = $employee->first_name; 
        $user->password = bcrypt($request->input('password')); 
        $user->save();
    
        return redirect()->route('employees.index')->with('success', 'Employee created successfully');
    }


    


    public function show($id)
    {
        $employee = Employee::find($id);
        return view('employees.show', ['employee' => $employee]);
    }

 
    public function edit($id)
    {
        $employee = Employee::find($id);
        return view('employees.edit', ['employee' => $employee]);
    }

 
    public function update(Request $request, $id)
    {
      
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:employees,email,' . $id,
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
           
        ]);
    
    
        $employee = Employee::find($id);
    
        $employee = Employee::find($id);

        
        if ($request->input('email') !== $employee->email) {
           
            $user = User::where('email', $employee->email)->first();
    
            if ($user) {
            
                $user->email = $request->input('email');
                $user->save();
            }
        }
        
       
        if ($request->input('first_name') !== $employee->first_name) {
         
            $user = User::where('email', $employee->email)->first();
    
            if ($user) {
            
                $user->name = $request->input('first_name');
                $user->save();
            }
        }
    
    
        $employee->first_name = $request->input('first_name');
        $employee->last_name = $request->input('last_name');
        $employee->email = $request->input('email');
        $employee->phone = $request->input('phone');
        $employee->address = $request->input('address');
        $employee->save();
    
        return redirect()->route('employees.index')->with('success', 'Employee updated successfully');
    }
    


    public function destroy($id)
{
    $employee = Employee::find($id);

    if (!$employee) {
        return redirect()->route('employees.index')->with('error', 'Employee not found');
    }

  
    $user = User::where('email', $employee->email)->first();

    if ($user) {
       
        $user->delete();
    }

    $employee->delete();

    return redirect()->route('employees.index')->with('success', 'Employee deleted successfully');
}

}
