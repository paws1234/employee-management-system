@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Schedules</h2>

    <a href="{{ route('schedule.create') }}" class="btn btn-primary">Create Schedule</a>
    <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Employee</th>
                <th>Day</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->id }}</td>
                    <td>
                        @if ($schedule->employee)
                            {{ $schedule->employee->first_name }}
                        @else
                            No Employee Assigned
                        @endif
                    </td>
                    <td>{{ $schedule->day }}</td>
                    <td>{{ $schedule->start_time }}</td>
                    <td>{{ $schedule->end_time }}</td>
                    <td>
                        <a href="{{ route('schedule.show', $schedule->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('schedule.edit', $schedule->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('schedule.destroy', $schedule->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this schedule?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
