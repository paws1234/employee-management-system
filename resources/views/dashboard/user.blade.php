@extends('layouts.app')

@section('content')
<div class="container">
    <h2>User Dashboard</h2>
    <div style="text-align: left;">
    
        <a href="{{ route('user.attendance') }}"class="btn btn-primary mb-2" style="display: block; text-align: left; width: 20%;">Manage Attendance</a>
        <a href="{{ route('user.cashadvances') }}" class="btn btn-primary mb-2" style="display: block; text-align: left; width: 20%;">View Cash Advances</a>
        <a href="{{ route('user.position.index') }}"class="btn btn-primary mb-2" style="display: block; text-align: left; width: 20%;">View Position</a> 
        <a href="{{ route('user.schedule.index') }}" class="btn btn-primary mb-2" style="display: block; text-align: left; width: 20%;">View Schedule</a>
        <a href="{{ route('user.deductions.index') }}" class="btn btn-primary mb-2" style="display: block; text-align: left; width: 20%;">View Deductions</a>
        <a href="{{ route('overtime.index') }}" class="btn btn-primary mb-2" style="display: block; text-align: left; width: 20%;">Manage Overtime</a>
        <a href="{{ route('show.payslip', auth()->user()->id) }}" class="btn btn-primary mb-2" style="display: block; text-align: left; width: 20%;">View Payslip</a>
    
</div>
</div>
@endsection

