@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Create Deduction Record</h2>

    <form method="post" action="{{ route('deductions.store') }}" class="bg-white shadow-md rounded px-8 py-6 mb-4">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
            <input type="text" class="form-control" name="name" id="name" required>
        </div>
        <div class="mb-4">
            <label for="amount" class="block text-gray-700 text-sm font-bold mb-2">Amount:</label>
            <input type="number" class="form-control" name="amount" id="amount" required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
            <textarea class="form-control" name="description" id="description"></textarea>
        </div>
        <div class="flex space-x-2">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">Create Deduction</button>
            <a href="{{ route('deductions.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">Go Back</a>
        </div>
    </form>
</div>
@endsection
