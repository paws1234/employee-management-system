@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Overtime Record</h2>

    <form method="post" action="{{ route('overtime.update', $overtimeRecord->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input type="hidden" name="employee_id" value="{{ auth()->user()->id }}">
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" name="date" id="date" value="{{ $overtimeRecord->date }}" required>
        </div>
        <div class="form-group">
            <label for="hours">Hours:</label>
            <input type="number" class="form-control" name="hours" id="hours" value="{{ $overtimeRecord->hours }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Overtime Record</button>
    </form>
</div>
@endsection
