@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Position Details</h2>
    <div>
        <strong>Title:</strong> {{ $position->title }}
    </div>
    <div>
        <strong>Description:</strong> {{ $position->description }}
    </div>
    <div>
        <strong>Salary per hour:</strong> {{ $position->salary }}
    </div>
    <div>
        <strong>Employee:</strong> {{ $position->employee }}
    </div>
    <a href="{{ route('positions.edit', $position->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('positions.index') }}" class="btn btn-primary">Go Back</a>
</div>
@endsection
