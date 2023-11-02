@extends('layouts.app')

@section('content')
<div class="bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-lg transform hover:scale-105 transition-transform">
        <h2 class="text-3xl font-bold text-center text-blue-600 mb-6 animate-bounce">{{ __('Login') }}</h2>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="text-gray-600">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="w-full p-3 border rounded focus:outline-none focus:ring focus:border-blue-400 @error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="text-gray-600">{{ __('Password') }}</label>
                <input id="password" type="password" class="w-full p-3 border rounded focus:outline-none focus:ring focus:border-blue-400 @error('password') border-red-500 @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <div class="flex items-center">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="ml-2 text-gray-600" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>

            <div class="mb-0">
                <div class="flex justify-between items-center">
                    <button type="submit" class="w-full p-3 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-400 transition-transform transform hover:scale-105">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="text-blue-600 hover:underline" href="{{ route('password.request') }}">
                            {{ __(' Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
