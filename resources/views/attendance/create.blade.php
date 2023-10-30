@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Attendance Record</h2>
    
    <form action="{{ route('attendance.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="check_in_time">Check-In Time:</label>
            <input type="time" name="check_in_time" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="check_out_time">Check-Out Time:</label>
            <input type="time" name ="check_out_time" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Record</button>
        <a href="{{ route('attendance.index') }}" class="btn btn-primary">Go Back</a>

    </form>
</div>
@endsection