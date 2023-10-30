@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Schedule</h2>

    <form method="post" action="{{ route('schedule.store') }}">
    @csrf
    <div class="form-group">
        <label for="employee_id">Employee Name:</label>
        <select class="form-control" name="employee_id" id="employee_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">
                    {{ $user->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="day">Day of the Week:</label>
        <select class="form-control" name="day" id="day" required>
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
        </select>
    </div>
    <div class="form-group">
        <label for="start_time">Start Time:</label>
        <input type="time" class="form-control" name="start_time" id="start_time" required>
    </div>
    <div class="form-group">
        <label for ="end_time">End Time:</label>
        <input type="time" class="form-control" name="end_time" id="end_time" required>
    </div>
    <button type="submit" class="btn btn-primary">Create Schedule</button>
    <a href="{{ route('schedule.index') }}" class="btn btn-primary">Go Back</a>
</form>
</div>
@endsection
