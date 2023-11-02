@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Schedules</h2>

    <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
        

        <table class="table w-full">
            <thead>
                <tr>
                    <th class="p-3">ID</th>
                    <th class="p-3">Employee</th>
                    <th class="p-3">Day</th>
                    <th class="p-3">Start Time</th>
                    <th class="p-3">End Time</th>
                    <th class="p-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedules as $schedule)
                    <tr class="border-b border-gray-300 hover:bg-gray-100 transition duration-300">
                        <td class="p-3">{{ $schedule->id }}</td>
                        <td class="p-3">
                            @if ($schedule->employee)
                                {{ $schedule->employee->first_name }}
                            @else
                                No Employee Assigned
                            @endif
                        </td>
                        <td class="p-3">{{ $schedule->day }}</td>
                        <td class="p-3">{{ $schedule->start_time }}</td>
                        <td class="p-3">{{ $schedule->end_time }}</td>
                        <td class="p-3">
                            <div class="flex space-x-2">
                                <a href="{{ route('schedule.show', $schedule->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">View</a>
                                <a href="{{ route('schedule.edit', $schedule->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">Edit</a>
                                <form action="{{ route('schedule.destroy', $schedule->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300" onclick="return confirm('Are you sure you want to delete this schedule?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    <a href="{{ route('schedule.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300 mb-4">Create Schedule</a>
        <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300 mb-4">Go Back</a>
</div>
@endsection
