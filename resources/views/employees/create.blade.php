@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Create New Employee</h2>
    <form method="post" action="{{ route('employees.store') }}" class="bg-white shadow-md p-4 rounded-lg">
        @csrf
        <div class="mb-4">
            <label for="first_name" class="block text-gray-600">First Name:</label>
            <input type="text" class="form-input" name="first_name" id="first_name" placeholder="Enter first name" required>
        </div>
        <div class="mb-4">
            <label for="last_name" class="block text-gray-600">Last Name:</label>
            <input type="text" class="form-input" name="last_name" id="last_name" placeholder="Enter last name" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-600">Email:</label>
            <input type="email" class="form-input" name="email" id="email" placeholder="Enter email" required>
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-gray-600">Phone:</label>
            <input type="text" class="form-input" name="phone" id="phone" placeholder="Enter phone" required>
        </div>
        <div class="mb-4">
            <label for="address" class="block text-gray-600">Address:</label>
            <textarea class="form-input" name="address" id="address" placeholder="Enter address" required></textarea>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-600">Password:</label>
            <input type="password" class="form-input" name="password" id="password" placeholder="Enter password" required>
        </div>
      
    </form>
    <div class="mb-4 mt-4">
    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">Create Employee</button>
    <a href="{{ route('employees.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">Go Back</a>
</div>



</div>
@endsection
