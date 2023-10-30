@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Schedule Details</h2>
    <div class="mt-3">
    <strong>Employee Name:</strong> {{ $schedule->employee->first_name }}
    </div>
    <div class="mt-3">
        <strong>Day:</strong> {{ $schedule->day }}
    </div>
    <div class="mt-3">
        <strong>Start Time:</strong> {{ $schedule->start_time }}
    </div>
    <div class="mt-3">
        <strong>End Time:</strong> {{ $schedule->end_time }}
    </div>
    <a href="{{ route('schedule.index') }}" class="btn btn-primary">Go Back</a>
</div>
@endsection
