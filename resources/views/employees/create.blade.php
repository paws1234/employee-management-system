@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create New Employee</h2>
    <form method="post" action="{{ route('employees.store') }}">
        @csrf
        <div class="form-group">
            <label for="first_name">First Name:</label>
            <input type="text" class="form-control" name="first_name" id="first_name">
        </div>
        <div class="form-group">
            <label for="last_name">Last Name:</label>
            <input type="text" class="form-control" name="last_name" id="last_name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" name="phone" id="phone">
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <textarea class="form-control" name="address" id="address"></textarea>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Create Employee</button>
        <a href="{{ route('employees.index') }}" class="btn btn-primary">Go Back</a>
    </form>
</div>
@endsection
