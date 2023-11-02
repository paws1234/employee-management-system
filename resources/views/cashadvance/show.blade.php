@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Cash Advance Details</h2>

    <form class="bg-white border border-gray-300 p-4 rounded-lg shadow-lg">
        <div class="mb-4">
            <label class="block text-gray-700 font-bold" for="employee">Employee:</label>
            <span class="text-gray-900">{{ $cashAdvance->employee->first_name }}</span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold" for="amount">Amount:</label>
            <span class="text-gray-900">{{ $cashAdvance->amount }}</span>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold" for="date">Date:</label>
            <span class="text-gray-900">{{ $cashAdvance->date }}</span>
        </div>

        <a href="{{ route('cashadvance.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition-duration-300 inline-block mt-4">Go Back</a>
    </form>
</div>
@endsection
