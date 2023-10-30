@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Position</h2>
    <form method="post" action="{{ route('positions.update', $position->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $position->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" name="description" id="description">{{ $position->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="salary">Salary Per Hour:</label>
            <input type="number" step="0.01" class="form-control" name="salary" id="salary" required>
        </div>
        <div class="form-group">
            <label for="employee">Employee:</label>
            <select class="form-control" name="employee" id="employee">
                @foreach ($users as $user)
                    <option value="{{ $user->name }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Position</button>
        <a href="{{ route('positions.index') }}" class="btn btn-primary">Go Back</a>
    </form>
</div>
@endsection
