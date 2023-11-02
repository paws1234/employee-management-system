@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Overtime Records</h2>

    <a href="{{ route('overtime.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg mb-4 inline-block">Create Overtime Record</a>
    <a href="{{ route('home') }}" class="bg-blue-500 hover-bg-blue-600 text-white py-2 px-4 rounded-lg mb-4 inline-block">Go Back</a>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-lg rounded-lg">
            <thead>
                <tr>
                    <th class="px-4 py-2">Employee</th>
                    <th class="px-4 py-2">Date</th>
                    <th class="px-4 py-2">Hours</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($overtimeRecords as $overtimeRecord)
                <tr>
                    <td class="border px-4 py-2">{{ $overtimeRecord->employee->first_name }}</td>
                    <td class="border px-4 py-2">{{ $overtimeRecord->date }}</td>
                    <td class="border px-4 py-2">{{ $overtimeRecord->hours }}</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('overtime.show', $overtimeRecord->id) }}" class="bg-blue-500 hover:bg-blue-600 text-white py-1 px-2 rounded-md mr-2">View</a>
                        <a href="{{ route('overtime.edit', $overtimeRecord->id) }}" class="bg-gray-500 hover:bg-gray-600 text-white py-1 px-2 rounded-md mr-2">Edit</a>
                        <form method="post" action="{{ route('overtime.destroy', $overtimeRecord->id) }}" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white py-1 px-2 rounded-md" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
