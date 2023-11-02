@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-4">Employee Details</h2>
    <table class="table border border-gray-300 rounded-lg shadow-lg w-full mb-4">
        <tbody>
            <tr class="bg-blue-500 text-white">
                <th class="p-3">Field</th>
                <th class="p-3">Details</th>
            </tr>
            <tr class="border-b border-gray-300 hover:bg-gray-100 transition duration-300">
                <td class="p-3">First Name</td>
                <td class="p-3">{{ $employee->first_name }}</td>
            </tr>
            <tr class="border-b border-gray-300 hover:bg-gray-100 transition duration-300">
                <td class="p-3">Last Name</td>
                <td class="p-3">{{ $employee->last_name }}</td>
            </tr>
            <tr class="border-b border-gray-300 hover:bg-gray-100 transition duration-300">
                <td class="p-3">Email</td>
                <td class="p-3">{{ $employee->email }}</td>
            </tr>
            <tr class="border-b border-gray-300 hover:bg-gray-100 transition duration-300">
                <td class="p-3">Phone</td>
                <td class="p-3">{{ $employee->phone }}</td>
            </tr>
            <tr class="border-b border-gray-300 hover:bg-gray-100 transition duration-300">
                <td class="p-3">Address</td>
                <td class="p-3">{{ $employee->address }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('employees.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded transform hover:scale-105 transition duration-300">Go Back</a>
</div>
@endsection
