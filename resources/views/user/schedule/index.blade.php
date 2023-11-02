@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Schedule Details</h2>

    <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg mt-4 inline-block">Go Back</a>

    @foreach ($schedules as $schedule)
    <div class="bg-white shadow-md rounded p-4 mt-4">
        <div class="mb-2">
            <strong class="text-lg text-gray-600">Day:</strong> {{ $schedule->day }}
        </div>
        <div class="mb-2">
            <strong class="text-lg text-gray-600">Start Time:</strong> {{ $schedule->start_time }}
        </div>
        <div class="mb-2">
            <strong class="text-lg text-gray-600">End Time:</strong> {{ $schedule->end_time }}
        </div>
    </div>
    @endforeach
</div>
@endsection
