@extends('layout.dashboard')

@section('dash-content')
    <section>
        <nav>
            <div class="container mx-auto flex justify-evenly p-4">
                <ul class="flex justify-between ">
                    <li class="px-5 mx-5">
                        <a href="" class="text-white hover:text-pink-500 transition">Catergory</a>
                    </li>
                    <li class="px-5 mx-5">
                        <a href="" class="text-white hover:text-pink-500 transition">Computer Science</a>
                    </li>
                    <li class="px-5 mx-5">
                        <a href="" class="text-white hover:text-pink-500 transition">Software Engineering</a>
                    </li>
                    <li class="px-5 mx-5">
                        <a href="" class="text-white hover:text-pink-500 transition">Network engineering</a>
                    </li>
                    <li class="px-5 mx-5">
                        <a href="" class="text-white hover:text-pink-500 transition">Cyber Security</a>
                    </li>
                    <li class="px-5 mx-5">
                        <a href="" class="text-white hover:text-pink-500 transition">Cloud Computing</a>
                    </li>
                    <li class="px-5 mx-5">
                        <a href="" class="text-white hover:text-pink-500 transition">Web Developing</a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>

    <section class="py-10">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">About Us</h3>
            <h4 class="text-xl mb-3 text-gray-200">Introduction</h4>
            <p class="mb-6">
                Lowa state university is a globally recognized and with more than 25,000 Sri Lankans.
                <br> We offer the largest library membership here at Lowa state global network with more than 50,000 books and digital resources
            </p>
            <a href="" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-pink-700 transition">Learn More</a>
        </div>
    </section>

    <section class="py-10">
        <div class="flex justify-center">
            <div class="w-full sm:w-1/2 mx-auto">
                <a href="{{ route('addbook')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-pink-700 transition">Add New Books</a>
                <a href="{{ route('addbook')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-pink-700 transition">Remove Old Books</a>
            </div>
        </div>    
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">New Additions</h3>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Topic 01</h3>
                        <h4 class="font-bold mb-3">Author 01</h4>
                        <p class="text-gray-200 mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam vero neque eius ullam cum illum fugiat suscipit sit mollitia. Et!
                        </p>
                        <a href="" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-pink-700 transition">Borrow</a>
                    </div>
                </div>
                
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Topic 02</h3>
                        <h4 class="font-bold mb-3">Author 02</h4>
                        <p class="text-gray-200 mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam vero neque eius ullam cum illum fugiat suscipit sit mollitia. Et!
                        </p>
                        <a href="" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-pink-700 transition">Borrow</a>
                    </div>
                </div>

                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Topic 03</h3>
                        <h4 class="font-bold mb-3">Author 03</h4>
                        <p class="text-gray-200 mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam vero neque eius ullam cum illum fugiat suscipit sit mollitia. Et!
                        </p>
                        <a href="" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-pink-700 transition">Borrow</a>
                    </div>
                </div>

                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full rounded-lg">
                        <h3 class="text-xl font-bold mb-3">Topic 04</h3>
                        <h4 class="font-bold mb-3">Author 04</h4>
                        <p class="text-gray-200 mb-3">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam vero neque eius ullam cum illum fugiat suscipit sit mollitia. Et!
                        </p>
                        <a href="" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-pink-700 transition">Borrow</a>
                    </div>
                </div>
            </div>            
        </div>
    </section>
@endsection