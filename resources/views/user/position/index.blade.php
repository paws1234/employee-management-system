@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Position Details</h2>
    @foreach ($positions as $position)
    <div>
        <strong>Title:</strong> {{ $position->title }}
    </div>
    <div>
        <strong>Description:</strong> {{ $position->description }}
    </div>
    <div>
        <strong>Salary Per Hour:</strong> {{ $position->salary }}
    </div>
    <div>
        <strong>Employee:</strong> {{ $position->employee }}
    </div>
    <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>
    @endforeach
    <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>
</div>
@endsection
