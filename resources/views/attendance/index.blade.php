@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Attendance List</h2>
    <a href="{{ route('attendance.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg mb-4">Create New Attendance</a>
    <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg mb-4">Go Back</a>

    <table class="min-w-full bg-white shadow-lg rounded-lg overflow-x-auto mt-4">
        <thead>
            <tr>
                <th class="px-4 py-2">Date</th>
                <th class="px-4 py-2">Employee First Name</th>
                <th class="px-4 py-2">Check-In Time</th>
                <th class="px-4 py-2">Check-Out Time</th>
                <th class="px-4 py-2">Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($attendances)
                @foreach ($attendances as $attendance)
                    <tr>
                        <td class="border px-4 py-2">{{ $attendance->date }}</td>
                        <td class="border px-4 py-2">{{ $attendance->employee->first_name }}</td>
                        <td class="border px-4 py-2">{{ $attendance->check_in_time }}</td>
                        <td class="border px-4 py-2">{{ $attendance->check_out_time }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('attendance.show', $attendance->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-2 rounded-md mr-2">View</a>
                            <a href="{{ route('attendance.edit', $attendance->id) }}" class="bg-gray-500 hover:bg-gray-600 text-white py-1 px-2 rounded-md mr-2">Edit</a>

                            <form action="{{ route('attendance.destroy', $attendance->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-2 rounded-md" onclick="return confirm('Are you sure you want to delete this attendance record?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">No attendance records found.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection
