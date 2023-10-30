@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Deduction Record</h2>

    <form method="post" action="{{ route('deductions.update', $deduction->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $deduction->name }}" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="number" class="form-control" name="amount" id="amount" value="{{ $deduction->amount }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" name="description" id="description">{{ $deduction->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Deduction</button>
        <a href="{{ route('deductions.index') }}" class="btn btn-primary">Go Back</a>

    </form>
</div>
@endsection
