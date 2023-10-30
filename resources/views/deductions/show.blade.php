@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Deduction Record Details</h2>

    <div class="mt-3">
        <strong>Name:</strong> {{ $deduction->name }}
    </div>
    <div class="mt-3">
        <strong>Amount:</strong> {{ $deduction->amount }}%
    </div>
    <div class="mt-3">
        <strong>Description:</strong> {{ $deduction->description }}
    </div>
    <a href="{{ route('deductions.index') }}" class="btn btn-primary">Go Back</a>
</div>
@endsection
