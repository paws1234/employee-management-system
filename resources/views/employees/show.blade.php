@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Employee Details</h2>
    <div>
        <strong>First Name:</strong> {{ $employee->first_name }}
    </div>
    <div>
        <strong>Last Name:</strong> {{ $employee->last_name }}
    </div>
    <div>
        <strong>Email:</strong> {{ $employee->email }}
    </div>
    <div>
        <strong>Phone:</strong> {{ $employee->phone }}
    </div>
    <div>
        <strong>Address:</strong> {{ $employee->address }}
    </div>
    <a href="{{ route('employees.index') }}" class="btn btn-primary">Go Back</a>
   
</div>
@endsection
