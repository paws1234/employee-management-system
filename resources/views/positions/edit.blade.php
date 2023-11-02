@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Edit Position</h2>

    <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
        <form method="post" action="{{ route('positions.update', $position->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                <input type="text" class="form-input" name="title" id="title" value="{{ $position->title }}" required>
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                <textarea class="form-textarea" name="description" id="description">{{ $position->description }}</textarea>
            </div>

            <div class="mb-4">
                <label for="salary" class="block text-gray-700 text-sm font-bold mb-2">Salary Per Hour:</label>
                <input type="number" step="0.01" class="form-input" name="salary" id="salary" required>
            </div>

            <div class="mb-4">
                <label for="employee" class="block text-gray-700 text-sm font-bold mb-2">Employee:</label>
                <select class="form-select" name="employee" id="employee">
                    @foreach ($users as $user)
                        <option value="{{ $user->name }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex space-x-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">Update Position</button>
                <a href="{{ route('positions.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">Go Back</a>
            </div>
        </form>
    </div>
</div>
@endsection
