@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Overtime Records</h2>
    
    <a href="{{ route('overtime.create') }}" class="btn btn-primary">Create Overtime Record</a>
    <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>


    <table class="table mt-3">
        <thead>
            <tr>
                <th>Employee</th>
                <th>Date</th>
                <th>Hours</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($overtimeRecords as $overtimeRecord)
            <tr>
            <td>{{ $overtimeRecord->employee->first_name }}</td>
                <td>{{ $overtimeRecord->date }}</td>
                <td>{{ $overtimeRecord->hours }}</td>
                <td>
                    <a href="{{ route('overtime.show', $overtimeRecord->id) }}" class="btn btn-primary">View</a>
                    <a href="{{ route('overtime.edit', $overtimeRecord->id) }}" class="btn btn-secondary">Edit</a>
                    <form method="post" action="{{ route('overtime.destroy', $overtimeRecord->id) }}" style="display: inline;">
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
