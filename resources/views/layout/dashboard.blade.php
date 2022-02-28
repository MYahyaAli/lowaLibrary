<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library of Lowa State University</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-700 text-white">
    <header class="sticky bg-gray-700 top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-evenly p-4">
            <h1 class="text-xl font-black">
                Library of Lowa State University
            </h1>
            <nav class="-mx-2">
                <a href="{{ route('signout') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition">Logout</a>
            </nav>
        </div>
    </header>
    <main>
    @yield('dash-content')
    </main>
    <footer>
        <div class="container mx-auto p-4 border-gray-800 border-t-4 text-white">
            <p> &copy;Library of Lowa State University| Randy De Mel</p>
        </div>
    </footer>
</body>
</html>