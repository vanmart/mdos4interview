@extends('layouts.master')

@section('content')    
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
        </div>

        <!-- Jumbotron  presentation-->
        @include('partials.presentation')
        
        <!-- Example row of columns -->
        @include('partials.3columnas')  
@endsection
    