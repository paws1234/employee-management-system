@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Admin Dashboard</h2>

    <div style="text-align: left;">
        <a href="{{ route('admin.employees') }}" class="btn btn-primary mb-2" style="display: block; text-align: left; width: 20%;">Manage Employees</a>
        <a href="{{ route('cashadvance.index') }}" class="btn btn-primary mb-2" style="display: block; text-align: left; width: 20%;">Manage Cash Advances</a>
        <a href="{{ route('positions.index') }}" class="btn btn-primary mb-2" style="display: block; text-align: left; width: 20%;">Manage Positions</a>
        <a href="{{ route('schedule.index') }}" class ="btn btn-primary mb-2" style="display: block; text-align: left; width: 20%;">Manage Schedules</a>
        <a href="{{ route('deductions.index') }}" class="btn btn-primary mb-2" style="display: block; text-align: left; width: 20%;">Manage Deductions</a>
        <a href="{{ route('admin.attendance.index') }}" class="btn btn-primary mb-2" style="display: block; text-align: left; width: 20%;">View Attendance</a>
        <a href="{{ route('admin.overtime.index') }}" class="btn btn-primary mb-2" style="display: block; text-align: left; width: 20%;">View Overtime</a>
    </div>
</div>
@endsection
