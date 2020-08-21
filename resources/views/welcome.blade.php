@extends('layouts.layout')

@section('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="/img/momo1.png" height="500px" width="500px">
                <div class="title m-b-md">
                    Momo Pasal <br>
                   <span id="pkr"> Pokhara's best Momo </span> 
                </div>
                <p class="msg">{{ session('msg') }}</p>
                <a href="/momos/create">Order Momo</a>

            </div>
        </div>
@endsection  