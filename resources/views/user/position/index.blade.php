@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Position Details</h2>

    @foreach ($positions as $position)
    <div class="bg-white shadow-md rounded p-4 mb-4">
        <div class="mb-2">
            <strong class="text-lg text-gray-600">Title:</strong> {{ $position->title }}
        </div>
        <div class="mb-2">
            <strong class="text-lg text-gray-600">Description:</strong> {{ $position->description }}
        </div>
        <div class="mb-2">
            <strong class="text-lg text-gray-600">Salary Per Hour:</strong> {{ $position->salary }}
        </div>
        <div class="mb-2">
            <strong class="text-lg text-gray-600">Employee:</strong> {{ $position->employee }}
        </div>
    </div>
    @endforeach

    <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg mt-4 inline-block">Go Back</a>
</div>
@endsection
