@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Schedule</h2>

    <form method="post" action="{{ route('schedule.update', $schedule->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="employee_id">Employee Name:</label>
            <select class="form-control" name="employee_id" id="employee_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $schedule->employee_id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="day">Day of the Week:</label>
            <select class="form-control" name="day" id="day">
                <option value="Monday" {{ $schedule->day == 'Monday' ? 'selected' : '' }}>Monday</option>
                <option value="Tuesday" {{ $schedule->day == 'Tuesday' ? 'selected' : '' }}>Tuesday</option>
                <option value="Wednesday" {{ $schedule->day == 'Wednesday' ? 'selected' : '' }}>Wednesday</option>
                <option value="Thursday" {{ $schedule->day == 'Thursday' ? 'selected' : '' }}>Thursday</option>
                <option value="Friday" {{ $schedule->day == 'Friday' ? 'selected' : '' }}>Friday</option>
                <option value="Saturday" {{ $schedule->day == 'Saturday' ? 'selected' : '' }}>Saturday</option>
                <option value="Sunday" {{ $schedule->day == 'Sunday' ? 'selected' : '' }}>Sunday</option>
            </select>
        </div>
        <div class="form-group">
            <label for="start_time">Start Time:</label>
            <input type="time" class="form-control" name="start_time" id="start_time" value="{{ $schedule->start_time }}">
        </div>
        <div class = "form-group"> 
            <label for="end_time">End Time:</label>
            <input type="time" class="form-control" name="end_time" id="end_time" value="{{ $schedule->end_time }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Schedule</button>
        <a href="{{ route('schedule.index') }}" class="btn btn-primary">Go Back</a>
    </form>
</div>
@endsection
