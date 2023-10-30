@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Cash Advance</h2>
        <form method="post" action="{{ route('cashadvance.update', $cashAdvance->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="employee_id">Employee:</label>
                <select class="form-control" name="employee_id" id="employee_id">
                    @foreach ($employees as $employee)
                        <option value="{{ $employee->id }}" @if($employee->id == $cashAdvance->employee_id) selected @endif>
                            {{ $employee->first_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="number" step="0.01" class="form-control" name="amount" id="amount" value="{{ $cashAdvance->amount }}" required>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" class="form-control" name="date" id="date" value="{{ $cashAdvance->date }}" required>
            </div>
        
            <button type="submit" class="btn btn-primary">Update Cash Advance</button>
            <a href="{{ route('cashadvance.index') }}" class="btn btn-primary">Go Back</a>
        </form>
    </div>
@endsection
