@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Create New Schedule</h2>

    <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
        <form method="post" action="{{ route('schedule.store') }}">
            @csrf

            <div class="mb-4">
                <label for="employee_id" class="block text-gray-700 text-sm font-bold mb-2">Employee Name:</label>
                <select class="form-control" name="employee_id" id="employee_id">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="day" class="block text-gray-700 text-sm font-bold mb-2">Day of the Week:</label>
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

            <div class="mb-4">
                <label for="start_time" class="block text-gray-700 text-sm font-bold mb-2">Start Time:</label>
                <input type="time" class="form-control" name="start_time" id="start_time" required>
            </div>

            <div class="mb-4">
                <label for="end_time" class="block text-gray-700 text-sm font-bold mb-2">End Time:</label>
                <input type="time" class="form-control" name="end_time" id="end_time" required>
            </div>

            <div class="flex space-x-2">
                <button type="submit" class="btn btn-primary">Create Schedule</button>
                <a href="{{ route('schedule.index') }}" class="btn btn-primary">Go Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
