@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Attendance Record</h2>
    
    <form action="{{ route('attendance.update', $attendance->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" class="form-control" value="{{ $attendance->date }}" required>
        </div>
    
        <div class="form-group">
            <label for="check_in_time">Check-In Time:</label>
            <input type="time" name="check_in_time" class="form-control" value="{{ $attendance->check_in_time }}" required>
        </div>
        <div class="form-group">
            <label for= "check_out_time">Check-Out Time:</label>
            <input type="time" name="check_out_time" class="form-control" value="{{ $attendance->check_out_time }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Record</button>
        <a href="{{ route('attendance.index') }}" class="btn btn-primary">Go Back</a>

    </form>
</div>
@endsection
