@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create New Cash Advance</h2>
        <form method="post" action="{{ route('cashadvance.store') }}">
            @csrf
            <div class="form-group">
                <label for="employee_id">Employee:</label>
                <select class="form-control" name="employee_id" id="employee_id">
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}">{{ $employee->first_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" step="0.01" class="form-control" name="amount" id="amount" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" name="date" id="date" required>
            </div>
           
            <button type="submit" class="btn btn-primary">Create Cash Advance</button>
            <a href="{{ route('cashadvance.index') }}" class="btn btn-primary">Go Back</a>
        </form>
    </div>
@endsection
