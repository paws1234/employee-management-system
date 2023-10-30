<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserManagementController extends Controller
{
    // Index: Display a list of user accounts
    public function index()
    {
        $users = User::all();
        return view('user_management.index', ['users' => $users]);
    }

    // Create: Show the form for creating a new user account
    public function create()
    {
        return view('user_management.create');
    }

    // Store: Store a newly created user account in the database
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            // Add more validation rules as needed
        ]);

        // Store logic
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        // Set other attributes as needed
        $user->save();

        return redirect()->route('user_management.index')->with('success', 'User account created successfully');
    }

    // Show: Display the specified user account
    public function show($id)
    {
        $user = User::find($id);
        return view('user_management.show', ['user' => $user]);
    }

    // Edit: Show the form for editing the specified user account
    public function edit($id)
    {
        $user = User::find($id);
        return view('user_management.edit', ['user' => $user]);
    }

    // Update: Update the specified user account in the database
    public function update(Request $request, $id)
    {
        // Validation
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:8',
            // Add more validation rules as needed
        ]);

        // Update logic
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        if ($request->input('password')) {
            $user->password = bcrypt($request->input('password'));
        }
        
        $user->save();

        return redirect()->route('user_management.index')->with('success', 'User account updated successfully');
    }

    // Destroy: Remove the specified user account from the database
    public function destroy($id)
    {
        // Deletion logic
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user_management.index')->with('success', 'User account deleted successfully');
    }
}
