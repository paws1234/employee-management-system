@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Overtime Record</h2>

    <form method="post" action="{{ route('overtime.store') }}">
        @csrf
        
        <div class="form-group">
            <input type="hidden" name="employee_id" value="{{ auth()->user()->id }}">
        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" name="date" id="date" required>
        </div>
        <div class="form-group">
            <label for="hours">Hours:</label>
            <input type="number" class="form-control" name="hours" id="hours" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Overtime Record</button>
        <a href="{{ route('overtime.index') }}" class="btn btn-primary">Go Back</a>

    </form>
</div>
@endsection
