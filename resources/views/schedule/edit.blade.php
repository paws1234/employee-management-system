@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Edit Schedule</h2>

    <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
        <form method="post" action="{{ route('schedule.update', $schedule->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="employee_id" class="block text-gray-700 text-sm font-bold mb-2">Employee Name:</label>
                <select class="form-control" name="employee_id" id="employee_id">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $user->id == $schedule->employee_id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="day" class="block text-gray-700 text-sm font-bold mb-2">Day of the Week:</label>
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

            <div class="mb-4">
                <label for="start_time" class="block text-gray-700 text-sm font-bold mb-2">Start Time:</label>
                <input type="time" class="form-control" name="start_time" id="start_time" value="{{ $schedule->start_time }}">
            </div>

            <div class="mb-4">
                <label for="end_time" class="block text-gray-700 text-sm font-bold mb-2">End Time:</label>
                <input type="time" class="form-control" name="end_time" id="end_time" value="{{ $schedule->end_time }}">
            </div>

            <div class="flex space-x-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transition duration-300">Update Schedule</button>
                <a href="{{ route('schedule.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transition duration-300">Go Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
