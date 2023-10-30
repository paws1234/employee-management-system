

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>View Cash Advances</h2>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Amount</th>
                    <th>Date</th>
                   
                </tr>
            </thead>
            <tbody>
                @foreach ($cashAdvances as $cashAdvance)
                    <tr>
                        <td>{{ $cashAdvance->amount }}</td>
                        <td>{{ $cashAdvance->date }}</td>
                      
                    </tr>
                @endforeach
            </tbody>
            
        </table>
        <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>
    </div>
@endsection
