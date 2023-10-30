@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Overtime Record Details</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Employee</th>
                    <th>Date</th>
                    <th>Hours</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($overtimeRecords as $overtimeRecord)
                    <tr>
                        <td>{{ $overtimeRecord->employee->first_name }}</td>
                        <td>{{ $overtimeRecord->date }}</td>
                        <td>{{ $overtimeRecord->hours }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>

    </div>
</div>
@endsection
