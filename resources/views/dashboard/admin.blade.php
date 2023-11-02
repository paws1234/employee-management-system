@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8 p-8 rounded-lg shadow-lg">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-3xl font-bold text-blue-600">Admin Dashboard</h2>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <a href="{{ route('admin.employees') }}" class="dashboard-link">
            <div class="p-4 h-full bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md">
                <span class="text-4xl text-white">👥</span>
                <span class="text-lg text-white">Manage Employees</span>
            </div>
        </a>

        <a href="{{ route('cashadvance.index') }}" class="dashboard-link">
            <div class="p-4 h-full bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md">
                <span class="text-4xl text-white">💰</span>
                <span class="text-lg text-white">Manage Cash Advances</span>
            </div>
        </a>

        <a href="{{ route('positions.index') }}" class="dashboard-link">
            <div class="p-4 h-full bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md">
                <span class="text-4xl text-white">📋</span>
                <span class="text-lg text-white">Manage Positions</span>
            </div>
        </a>

        <a href="{{ route('schedule.index') }}" class="dashboard-link">
            <div class="p-4 h-full bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md">
                <span class="text-4xl text-white">📅</span>
                <span class="text-lg text-white">Manage Schedules</span>
            </div>
        </a>

        <a href="{{ route('deductions.index') }}" class="dashboard-link">
            <div class="p-4 h-full bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md">
                <span class="text-4xl text-white">📉</span>
                <span class="text-lg text-white">Manage Deductions</span>
            </div>
        </a>

        <a href="{{ route('admin.attendance.index') }}" class="dashboard-link">
            <div class="p-4 h-full bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md">
                <span class="text-4xl text-white">📝</span>
                <span class="text-lg text-white">View Attendance</span>
            </div>
        </a>

        <a href="{{ route('admin.overtime.index') }}" class="dashboard-link">
            <div class="p-4 h-full bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md">
                <span class="text-4xl text-white">⏰</span>
                <span class="text-lg text-white">View Overtime</span>
            </div>
        </a>
    </div>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
    @csrf
</form>
@endsection
