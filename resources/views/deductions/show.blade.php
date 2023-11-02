@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-bold mb-6">Deduction Record Details</h2>

    <div class="mt-3">
        <p class="text-lg"><strong>Name:</strong> {{ $deduction->name }}</p>
    </div>
    <div class="mt-3">
        <p class="text-lg"><strong>Amount:</strong> {{ $deduction->amount }}%</p>
    </div>
    <div class="mt-3">
        <p class="text-lg"><strong>Description:</strong> {{ $deduction->description }}</p>
    </div>
    <a href="{{ route('deductions.index') }}" class="inline-block mt-6 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Go Back</a>
</div>
@endsection
