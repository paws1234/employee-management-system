@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Attendance Records</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Employee</th>
                    <th>Check-In Time</th>
                    <th>Check-Out Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($attendances as $attendance)
                <tr>
                    <td>{{ $attendance->date }}</td>
                    <td>{{ $attendance->employee->first_name }}</td>
                    <td>{{ $attendance->check_in_time }}</td>
                    <td>{{ $attendance->check_out_time }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>
</div>
@endsection
