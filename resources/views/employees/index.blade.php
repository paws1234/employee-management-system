@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">List of Employees</h2>
    <a href="{{ route('employees.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300 mb-4">Create New Employee</a>
    <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300 mb-4 ml-2">Go Back</a>
    <table class="table border border-gray-300 rounded-lg shadow-lg mt-4">
        <thead class="bg-blue-500 text-white">
            <tr>
                <th class="p-3 border-r">ID</th>
                <th class="p-3 border-r">First Name</th>
                <th class="p-3 border-r">Last Name</th>
                <th class="p-3 border-r">Email</th>
                <th class="p-3 border-r">Phone</th>
                <th class="p-3 border-r">Address</th>
                <th class="p-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr class="border-b border-gray-300 hover:bg-gray-100 transition duration-300">
                <td class="p-3 border-r">{{ $employee->id }}</td>
                <td class="p-3 border-r">{{ $employee->first_name }}</td>
                <td class="p-3 border-r">{{ $employee->last_name }}</td>
                <td class="p-3 border-r">{{ $employee->email }}</td>
                <td class="p-3 border-r">{{ $employee->phone }}</td>
                <td class="p-3 border-r">{{ $employee->address }}</td>
                <td class="p-3">
                    <a href="{{ route('employees.show', $employee->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300 mr-2">View</a>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300 mr-2">Edit</a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
