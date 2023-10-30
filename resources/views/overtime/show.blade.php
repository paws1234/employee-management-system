@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Overtime Record Details</h2>

    <div class="mt-3">
        <strong>Employee:</strong> {{  $overtimeRecord->employee->first_name }}
    </div>
    <div class="mt-3">
        <strong>Date:</strong> {{ $overtimeRecord->date }}
    </div>
    <div class="mt-3">
        <strong>Hours:</strong> {{ $overtimeRecord->hours }}
    </div>

    <a href="{{ route('overtime.index') }}" class="btn btn-primary">Go Back</a>
</div>
@endsection
