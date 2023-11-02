@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Cash Advances</h2>

    @if (session('success'))
        <div class="bg-green-500 text-white py-2 px-4 mb-4 rounded hover:scale-105 transition-transform duration-300">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('cashadvance.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded hover:scale-105 transition-transform duration-300 mb-4">Create New Cash Advance</a>
    <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded hover:scale-105 transition-transform duration-300 mb-4">Go Back</a>

    <table class="table border border-gray-300 rounded-lg shadow-lg mt-4">        <thead class="bg-blue-500 text-white">
            <tr>
                <th class="p-3 border-r">Employee</th>
                <th class="p-3 border-r">Amount</th>
                <th class="p-3 border-r">Date</th>
                <th class="p-3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cashAdvances as $cashAdvance)
                <tr class="border-b border-gray-300 hover:bg-gray-100 transition-transform duration-300">
                    <td class="p-3 border-r">{{ $cashAdvance->employee->first_name }}</td>
                    <td class="p-3 border-r">{{ $cashAdvance->amount }}</td>
                    <td class="p-3 border-r">{{ $cashAdvance->date }}</td>
                    <td class="p-3">
                        <div class="flex space-x-2">
                            <a href="{{ route('cashadvance.show', $cashAdvance->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded hover:scale-105 transition-transform duration-300">View</a>
                            <a href="{{ route('cashadvance.edit', $cashAdvance->id) }}" class="bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded hover:scale-105 transition-transform duration-300">Edit</a>
                            <form action="{{ route('cashadvance.destroy', $cashAdvance->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded hover:scale-105 transition-transform duration-300" onclick="return confirm('Are you sure you want to delete this cash advance?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
