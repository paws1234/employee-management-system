@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Create New Attendance Record</h2>

    <form action="{{ route('attendance.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="date" class="text-lg text-gray-600">Date:</label>
            <input type="date" name="date" class="border border-gray-300 rounded-md px-3 py-2 w-full" required>
        </div>
        <div class="mb-4">
            <label for="check_in_time" class="text-lg text-gray-600">Check-In Time:</label>
            <input type="time" name="check_in_time" class="border border-gray-300 rounded-md px-3 py-2 w-full" required>
        </div>
        <div class="mb-4">
            <label for="check_out_time" class="text-lg text-gray-600">Check-Out Time:</label>
            <input type="time" name="check_out_time" class="border border-gray-300 rounded-md px-3 py-2 w-full" required>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg mr-2">Create Record</button>
        <a href="{{ route('attendance.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">Go Back</a>
    </form>
</div>
@endsection
