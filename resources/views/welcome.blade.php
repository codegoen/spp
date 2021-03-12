@extends('layouts.app')

@section('content')
    <div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
        <div class="absolute top-0 right-0 mt-4 mr-4">
            @if (Route::has('login'))
                <div class="space-x-4">
                    @auth
                        <a class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:outline-none focus:underline"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Log out
                        </a>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:outline-none focus:underline"
                            href="{{ route('login') }}">
                            Log in
                        </a>
                        @if (Route::has('register'))
                            <a class="font-medium text-indigo-600 transition duration-150 ease-in-out hover:text-indigo-500 focus:outline-none focus:underline"
                                href="{{ route('register') }}">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="flex items-center justify-center">
            <div class="flex flex-col justify-around">
                <div class="space-y-6">
                    <a href="{{ route('home') }}">
                        <x-icons.logo class="w-auto h-16 mx-auto text-indigo-600">
                        </x-icons.logo>
                    </a>
                    <h1 class="text-5xl font-extrabold tracking-wider text-center text-gray-600">
                        Goen CBT
                    </h1>
                </div>
            </div>
        </div>
    </div>
@endsection
