@extends('layouts.app') 
@section('content')
<div class="container">
    <h1>Payslip</h1>

    <p><strong>Pay:</strong> ${{ $result->pay }}</p>
    <p><strong>Cash Advance Deduction:</strong> ${{ $result->cashAdvanceDeduction }}</p>
    <p><strong>Overtime Earnings:</strong> ${{ $result->overtimeEarnings }}</p>
    <p><strong>Deductions Total:</strong> ${{ $result->deductionsTotal }}</p>
    <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>
    {{-- You can add more information or formatting as needed --}}
</div>

@endsection
