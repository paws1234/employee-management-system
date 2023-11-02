@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Payslip</h1>

    <div class="bg-white shadow-md rounded p-4 mb-4">
        <p class="mb-2"><strong class="text-lg text-gray-600">Pay:</strong> ${{ $result->pay }}</p>
        <p class="mb-2"><strong class="text-lg text-gray-600">Cash Advance Deduction:</strong> ${{ $result->cashAdvanceDeduction }}</p>
        <p class="mb-2"><strong class="text-lg text-gray-600">Overtime Earnings:</strong> ${{ $result->overtimeEarnings }}</p>
        <p class="mb-2"><strong class="text-lg text-gray-600">Deductions Total:</strong> ${{ $result->deductionsTotal }}</p>
    </div>

    <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg inline-block">Go Back</a>
</div>
@endsection
