@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Delete Position</h2>
    <p>Are you sure you want to delete this position?</p>
    <form method="post" action="{{ route('positions.destroy', $position->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Position</button>
        <a href="{{ route('positions.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
