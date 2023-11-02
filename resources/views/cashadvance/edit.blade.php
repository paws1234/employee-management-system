@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Edit Cash Advance</h2>

    <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <form method="post" action="{{ route('cashadvance.update', $cashAdvance->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="employee_id" class="block text-gray-700 text-sm font-bold mb-2">Employee:</label>
                <select class="form-select" name="employee_id" id="employee_id">
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}" @if($employee->id == $cashAdvance->employee_id) selected @endif>
                            {{ $employee->first_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="amount" class="block text-gray-700 text-sm font-bold mb-2">Amount:</label>
                <input type="number" step="0.01" class="form-input" name="amount" id="amount" value="{{ $cashAdvance->amount }}" required>
            </div>

            <div class="mb-4">
                <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date:</label>
                <input type="date" class="form-input" name="date" id="date" value="{{ $cashAdvance->date }}" required>
            </div>

            <div class="flex space-x-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Update Cash Advance</button>
                <a href="{{ route('cashadvance.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded">Go Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
