@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Deduction Records</h2>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow-lg rounded-lg">
            <thead>
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Amount</th>
                    <th class="px-4 py-2">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deductions as $deduction)
                <tr>
                    <td class="border px-4 py-2">{{ $deduction->name }}</td>
                    <td class="border px-4 py-2">{{ $deduction->amount }}%</td>
                    <td class="border px-4 py-2">{{ $deduction->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('home') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg mt-4 inline-block">Go Back</a>
</div>
@endsection
