@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Deduction Records</h2>
    
    <a href="{{ route('deductions.create') }}" class="btn btn-primary">Create Deduction</a>
    <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Amount</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deductions as $deduction)
            <tr>
                <td>{{ $deduction->name }}</td>
                <td>{{ $deduction->amount}}%</td>
                <td>{{ $deduction->description }}</td>
                <td>
                    <a href="{{ route('deductions.show', $deduction->id) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('deductions.edit', $deduction->id) }}" class="btn btn-secondary">Edit</a>
                    <form method="post" action="{{ route('deductions.destroy', $deduction->id) }}" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
