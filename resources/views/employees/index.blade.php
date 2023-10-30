@extends('layouts.app')

@section('content')
<div class="container">
    <h2>List of Employees</h2>
    <a href="{{ route('employees.create') }}" class="btn btn-primary">Create New Employee</a>
    <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->first_name }}</td>
                <td>{{ $employee->last_name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->address }}</td>
                <td>
                    <a href="{{ route('employees.show', $employee->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
    </form>


                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
