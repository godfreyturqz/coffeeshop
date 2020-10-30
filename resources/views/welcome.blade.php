@extends('layouts.layout')

@section('content')
<div>
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endif
        </div>
    @endif

    <img src="/img/logo.jpg" alt="logo" style="height:70vh;">
    <p>{{ session('message') }}</p>
    <h3>
        <a href="/coffees/create">Order Here</a>
    </h3>
    <h3>
        <a href="/coffees">Show Order</a>
    </h3>

</div>
@endsection