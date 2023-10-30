@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Cash Advance Details</h2>
        <div>
            <strong>Employee:</strong> {{ $cashAdvance->employee->first_name }}
        </div>
        <div>
            <strong>Amount:</strong> {{ $cashAdvance->amount }}
        </div>
        <div>
            <strong>Date:</strong> {{ $cashAdvance->date }}
        </div>

        <a href="{{ route('cashadvance.index') }}" class="btn btn-primary">Go Back</a>
    </div>
@endsection

