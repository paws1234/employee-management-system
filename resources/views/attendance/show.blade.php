@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Attendance Record</h2>

    <ul class="list-disc ml-8">
        <li><strong class="text-gray-600">Date:</strong> {{ $attendance->date }}</li>
        <li><strong class="text-gray-600">Employee:</strong> {{ $attendance->employee->first_name }}</li>
        <li><strong class="text-gray-600">Check-In Time:</strong> {{ $attendance->check_in_time }}</li>
        <li><strong class="text-gray-600">Check-Out Time:</strong> {{ $attendance->check_out_time }}</li>
    </ul>

    <a href="{{ route('attendance.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg mt-4 inline-block">Go Back</a>
</div>
@endsection
