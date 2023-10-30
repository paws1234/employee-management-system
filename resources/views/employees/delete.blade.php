@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Confirm Deletion</h2>
    <p>Are you sure you want to delete the employee?</p>
    <p><strong>Employee Name:</strong> {{ $employee->first_name }} {{ $employee->last_name }}</p>

    <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</button>
</form>

</div>
@endsection
