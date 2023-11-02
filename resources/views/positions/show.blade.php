@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Position Details</h2>

    <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
        <div>
            <strong>Title:</strong> {{ $position->title }}
        </div>
        <div>
            <strong>Description:</strong> {{ $position->description }}
        </div>
        <div>
            <strong>Salary per hour:</strong> {{ $position->salary }}
        </div>
        <div>
            <strong>Employee:</strong> {{ $position->employee }}
        </div>
        <div class="flex space-x-2 mt-4">
            <a href="{{ route('positions.edit', $position->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">Edit</a>
            <a href="{{ route('positions.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">Go Back</a>
        </div>
    </div>
</div>
@endsection
