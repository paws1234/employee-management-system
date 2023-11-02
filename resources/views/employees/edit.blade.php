@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Edit Employee</h2>
    <table class="table border border-gray-300 rounded-lg shadow-lg w-full mb-4">
        <tbody>
            <form method="post" action="{{ route('employees.update', ['employee' => $employee->id]) }}">
                @csrf
                @method('PUT') 

                <tr class="border-b border-gray-300 hover:bg-gray-100 transition duration-300">
                    <td class="p-3">
                        <label for="first_name">First Name:</label>
                    </td>
                    <td class="p-3">
                        <input type="text" class="form-control" name="first_name" id="first_name" value="{{ $employee->first_name }}">
                    </td>
                </tr>

                <tr class="border-b border-gray-300 hover:bg-gray-100 transition duration-300">
                    <td class="p-3">
                        <label for="last_name">Last Name:</label>
                    </td>
                    <td class="p-3">
                        <input type="text" class="form-control" name="last_name" id="last_name" value="{{ $employee->last_name }}">
                    </td>
                </tr>

                <tr class="border-b border-gray-300 hover:bg-gray-100 transition duration-300">
                    <td class="p-3">
                        <label for="email">Email:</label>
                    </td>
                    <td class="p-3">
                        <input type="email" class="form-control" name="email" id="email" value="{{ $employee->email }}">
                    </td>
                </tr>

                <tr class="border-b border-gray-300 hover-bg-gray-100 transition duration-300">
                    <td class="p-3">
                        <label for="phone">Phone:</label>
                    </td>
                    <td class="p-3">
                        <input type="text" class="form-control" name="phone" id="phone" value="{{ $employee->phone }}">
                    </td>
                </tr>

                <tr class="border-b border-gray-300 hover:bg-gray-100 transition duration-300">
                    <td class="p-3">
                        <label for="address">Address:</label>
                    </td>
                    <td class="p-3">
                        <textarea class="form-control" name="address" id="address">{{ $employee->address }}</textarea>
                    </td>
                </tr>
            </tbody>
        </table>

        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">Update Employee</button>
        <a href="{{ route('employees.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">Go Back</a>
    </form>
</div>
@endsection
