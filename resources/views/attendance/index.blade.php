@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Attendance List</h2>
    <a href="{{ route('attendance.create') }}" class="btn btn-primary">Create New Attendance</a>
    <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Date</th>
                <th>Employee First Name</th>
                <th>Check-In Time</th>
                <th>Check-Out Time</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if ($attendances)
                @foreach ($attendances as $attendance)
                    <tr>
                        <td>{{ $attendance->date }}</td>
                        <td>{{ $attendance->employee->first_name }}</td>
                        <td>{{ $attendance->check_in_time }}</td>
                        <td>{{ $attendance->check_out_time }}</td>
                        <td>
                            <a href="{{ route('attendance.show', $attendance->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('attendance.edit', $attendance->id) }}" class="btn btn-secondary">Edit</a>

                            <form action="{{ route('attendance.destroy', $attendance->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this attendance record?')">Delete</button>
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
