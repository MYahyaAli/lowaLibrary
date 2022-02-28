@extends('layout.default')

@section('page-content')
    <section class="relative min-h-screen flex items-center text-white">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl">
                Nothing is <span class="text-pink-500">Pleasanter</span> Than Exploring a <span class="text-pink-500">Library</span>
            </h2>
            <h3 class="text-2xl sm:text-4xl italic py-10">Walter Savage Landor</h3>
        </div>
        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center text-white">Scroll to Join Us</p>
        </div>
    </section>


    <section class="py-10 flex justify-center text-white">
        <div class="max-w-screen-md mx-5 px-5">
            <a href="{{ route('login')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-pink-700 transition">Sign In</a>
        </div>
        <div class="max-w-screen-md mx-5 px-5">
            <a href="{{ route('register-user')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-pink-700 transition">Register</a>
        </div>
    </section>
@endsection