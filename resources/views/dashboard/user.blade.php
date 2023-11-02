@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold text-blue-600 mb-6">User Dashboard</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <a href="{{ route('user.attendance') }}" class="dashboard-link">
            <div class="p-4 h-full bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md flex flex-col items-center justify-center">
                <i class="fas fa-calendar text-4xl text-white">📋</i>
                <span class="text-2xl text-white mt-2">Manage Attendance</span>
            </div>
        </a>

        <a href="{{ route('user.cashadvances') }}" class="dashboard-link">
            <div class="p-4 h-full bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md flex flex-col items-center justify-center">
                <i class="fas fa-money-bill text-4xl text-white">📝</i>
                <span class="text-2xl text-white mt-2">View Cash Advances</span>
            </div>
        </a>

        <a href="{{ route('user.position.index') }}" class="dashboard-link">
            <div class="p-4 h-full bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md flex flex-col items-center justify-center">
                <i class="fas fa-address-card text-4xl text-white">💼</i>
                <span class="text-2xl text-white mt-2">View Position</span>
            </div>
        </a>

        <a href="{{ route('user.schedule.index') }}" class="dashboard-link">
            <div class="p-4 h-full bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md flex flex-col items-center justify-center">
                <i class="fas fa-calendar-alt text-4xl text-white">📅</i>
                <span class="text-2xl text-white mt-2">View Schedule</span>
            </div>
        </a>

        <a href="{{ route('user.deductions.index') }}" class="dashboard-link">
            <div class="p-4 h-full bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md flex flex-col items-center justify-center">
                <i class="fas fa-file-invoice-dollar text-4xl text-white">📉</i>
                <span class="text-2xl text-white mt-2">View Deductions</span>
            </div>
        </a>

        <a href="{{ route('overtime.index') }}" class="dashboard-link">
            <div class="p-4 h-full bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md flex flex-col items-center justify-center">
                <i class="fas fa-clock text-4xl text-white">⏰</i>
                <span class="text-2xl text-white mt-2">Manage Overtime</span>
            </div>
        </a>

        <a href="{{ route('show.payslip', auth()->user()->id) }}" class="dashboard-link">
            <div class="p-4 h-full bg-blue-500 hover:bg-blue-600 rounded-lg shadow-md flex flex-col items-center justify-center">
                <i class="fas fa-receipt text-4xl text-white">💰</i>
                <span class="text-2xl text-white mt-2">View Payslip</span>
            </div>
        </a>
    </div>
</div>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
    @csrf
</form>
@endsection
