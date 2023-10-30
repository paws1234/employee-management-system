@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Schedule Details</h2>

    <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>

    @foreach ($schedules as $schedule)
      
        <div class="mt-3">
            <strong>Day:</strong> {{ $schedule->day }}
        </div>
        <div class="mt-3">
            <strong>Start Time:</strong> {{ $schedule->start_time }}
        </div>
        <div class="mt-3">
            <strong>End Time:</strong> {{ $schedule->end_time }}
        </div>
    @endforeach
</div>
@endsection
