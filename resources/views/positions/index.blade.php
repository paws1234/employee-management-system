@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Positions</h2>

    @if (session('success'))
        <div class="bg-green-500 text-white py-2 px-4 mb-4 rounded transform hover:scale-105 transition duration-300">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-4"> 
        <a href="{{ route('positions.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300 mb-2">Create New Position</a>
        <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300 mb-2">Go Back</a>
    </div>

    <table class="table border border-gray-300 rounded-lg shadow-lg w-full divide-y">
        <thead class="bg-blue-500 text-white">
            <tr>
                <th class="p-3">Title</th>
                <th class="p-3">Description</th>
                <th class="p-3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($positions as $position)
                <tr class="hover:bg-gray-100 transition duration-300">
                    <td class="p-3 border-b border-r border-gray-300">{{ $position->title }}</td>
                    <td class="p-3 border-b border-r border-gray-300">{{ $position->description }}</td>
                    <td class="p-3 border-b border-gray-300">
                        <div class="flex space-x-2">
                            <a href="{{ route('positions.show', $position->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">View</a>
                            <a href="{{ route('positions.edit', $position->id) }}" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">Edit</a>
                            <form action="{{ route('positions.destroy', $position->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300" onclick="return confirm('Are you sure you want to delete this position?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
