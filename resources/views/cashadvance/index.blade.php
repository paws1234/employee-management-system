@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Cash Advances</h2>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <a href="{{ route('cashadvance.create') }}" class="btn btn-primary">Create New Cash Advance</a>
        <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Employee</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Action</th> 
                </tr>
            </thead>
            <tbody>
                @foreach ($cashAdvances as $cashAdvance)
                    <tr>
                        <td>{{ $cashAdvance->employee->first_name }}</td>
                        <td>{{ $cashAdvance->amount }}</td>
                        <td>{{ $cashAdvance->date }}</td>
                        <td>
                            <a href="{{ route('cashadvance.show', $cashAdvance->id) }}" class="btn btn-primary">View</a>
                            <a href="{{ route('cashadvance.edit', $cashAdvance->id) }}" class="btn btn-secondary">Edit</a>
                            <form action="{{ route('cashadvance.destroy', $cashAdvance->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
