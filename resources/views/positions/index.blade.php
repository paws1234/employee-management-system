@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Positions</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('positions.create') }}" class="btn btn-primary">Create New Position</a>
    <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($positions as $position)
                <tr>
                    <td>{{ $position->title }}</td>
                    <td>{{ $position->description }}</td>
                    <td>
                        <a href="{{ route('positions.show', $position->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('positions.edit', $position->id) }}" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('positions.destroy', $position->id) }}" method="POST" style="display: inline;">
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
