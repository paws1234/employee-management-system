@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Overtime Record Details</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-lg rounded-lg">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left">Employee</th>
                    <th class="px-4 py-2 text-left">Date</th>
                    <th class="px-4 py-2 text-left">Hours</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($overtimeRecords as $overtimeRecord)
                <tr>
                    <td class="border px-4 py-2">{{ $overtimeRecord->employee->first_name }}</td>
                    <td class="border px-4 py-2">{{ $overtimeRecord->date }}</td>
                    <td class="border px-4 py-2">{{ $overtimeRecord->hours }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('home') }}" class="inline-block mt-6 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Go Back</a>
</div>
@endsection
