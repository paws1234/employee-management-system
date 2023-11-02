@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Deduction Records</h2>
    <a href="{{ route('deductions.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300 mb-2">Create Deduction</a>
    <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300 mb-2">Go Back</a>

    <div class="bg-white shadow-md rounded px-8 py-6 mb-4 mt-4">
    <table class="table border border-gray-300 rounded-lg shadow-lg mt-4">        <thead class="bg-blue-500 text-white">
            <thead class="bg-blue-500 text-white">
                <tr>
                    <th class="p-2 border border-blue-600">Name</th>
                    <th class="p-2 border border-blue-600">Amount</th>
                    <th class="p-2 border border-blue-600">Description</th>
                    <th class="p-2 border border-blue-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deductions as $deduction)
                <tr class="border-b border-gray-300 hover-bg-gray-100 transition duration-300">
                    <td class="p-2 border border-gray-300">{{ $deduction->name }}</td>
                    <td class="p-2 border border-gray-300">{{ $deduction->amount }}%</td>
                    <td class="p-2 border border-gray-300">{{ $deduction->description }}</td>
                    <td class="p-2 border border-gray-300">
                        <a href="{{ route('deductions.show', $deduction->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">View</a>
                        <a href="{{ route('deductions.edit', $deduction->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">Edit</a>
                        <form method="post" action="{{ route('deductions.destroy', $deduction->id) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
