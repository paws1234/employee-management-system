@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Attendance Record</h2>
    
    <ul>
        <li><strong>Date:</strong> {{ $attendance->date }}</li>
        <li><strong>Employee:</strong> {{ $attendance->employee->first_name }}</li>
        <li><strong>Check-In Time:</strong> {{ $attendance->check_in_time }}</li>
        <li><strong>Check-Out Time:</strong> {{ $attendance->check_out_time }}</li>
    </ul>
    
    <a href="{{ route('attendance.index') }}" class="btn btn-primary">Go Back</a>
</div>
@endsection
