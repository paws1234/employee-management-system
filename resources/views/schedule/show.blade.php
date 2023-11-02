@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Schedule Details</h2>

    <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
        <div class="mt-3">
            <strong class="text-blue-500">Employee Name:</strong> {{ $schedule->employee->first_name }}
        </div>
        <div class="mt-3">
            <strong class="text-blue-500">Day:</strong> {{ $schedule->day }}
        </div>
        <div class="mt-3">
            <strong class="text-blue-500">Start Time:</strong> {{ $schedule->start_time }}
        </div>
        <div class="mt-3">
            <strong class="text-blue-500">End Time:</strong> {{ $schedule->end_time }}
        </div>
        <div class="mt-4">
            <a href="{{ route('schedule.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">Go Back</a>
        </div>
    </div>
</div>
@endsection
