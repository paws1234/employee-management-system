@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Create Overtime Record</h2>

    <form method="post" action="{{ route('overtime.store') }}" class="max-w-md bg-white rounded-lg shadow-md p-6 mx-auto">
        @csrf
        
        <div class="mb-4">
            <input type="hidden" name="employee_id" value="{{ auth()->user()->id }}">
        </div>

        <div class="mb-4">
            <label for="date" class="text-gray-600">Date:</label>
            <input type="date" class="block w-full py-2 px-3 rounded border focus:outline-none focus:ring focus:border-blue-300" name="date" id="date" required>
        </div>
        <div class="mb-4">
            <label for="hours" class="text-gray-600">Hours:</label>
            <input type="number" class="block w-full py-2 px-3 rounded border focus:outline-none focus:ring focus:border-blue-300" name="hours" id="hours" required>
        </div>

        <div class="flex space-x-4">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg flex-grow">Create Overtime Record</button>
            <a href="{{ route('overtime.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg">Go Back</a>
        </div>
    </form>
</div>
@endsection
