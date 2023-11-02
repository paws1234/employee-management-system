<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Employee Management System</title>

   
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div id="app">
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto p-4">
            <div class="flex justify-between items-center">
                <a class="text-xl font-semibold text-blue-600" href="{{ url('home') }}">
                    Employee Management System
                </a>
                <button class="lg:hidden block text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 transition duration-300 transform hover:scale-110">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true" class="w-6 h-6">
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <div class="hidden lg:flex space-x-4">
                    <ul class="flex space-x-4 items-center">
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a class="text-gray-500 hover:text-blue-600 transform hover:scale-105 transition duration-300" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="relative group">
                                <div class="flex items-center cursor-pointer group-hover:text-blue-600">
                                 
                                    <a class="block px-3 py-2 transform hover:scale-105 transition duration-300" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                </div>
                                
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </div>
    </nav>
   <script>
    
    document.getElementById('logout-form').addEventListener('submit', function(event) {
        if (!confirm('Are you sure you want to logout?')) {
            event.preventDefault();
        }
    });
</script>
    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
