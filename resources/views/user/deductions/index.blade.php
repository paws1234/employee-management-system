@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Deduction Records</h2>

    <div class="table-responsive"> <!-- Make the table responsive -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Amount</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deductions as $deduction)
                <tr>
                    <td>{{ $deduction->name }}</td>
                    <td>{{ $deduction->amount }}%</td>
                    <td>{{ $deduction->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>
</div>
@endsection
