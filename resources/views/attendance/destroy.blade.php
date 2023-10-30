@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Confirm Deletion</h2>
    <p>Are you sure you want to delete this attendance record?</p>
    
    <form method="post" action="{{ route('attendance.destroy', $attendance->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        <a href="{{ route('attendance.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
