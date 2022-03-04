<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library of Lowa State University</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-700">
    <header class="fixed bg-gray-700 top-0 left-0 right-0 z-50 text-white">
        <div class="container mx-auto flex justify-evenly p-4">
            <h1 class="text-xl font-black">
                Library of Lowa State University
            </h1>
            <nav class="-mx-2">
                <a href="{{ route('login')}}" class="text-lg mx-2 text-white hover:text-pink-500 transition">Login</a>
                <a href="{{ route('register-user')}}" class="text-lg mx-2 text-white hover:text-pink-500 transition">Register</a>
            </nav>
        </div>
    </header>
    <main>
        @yield('page-content')
    </main>
    <footer>
        <div class="container mx-auto p-4 border-gray-800 border-t-4 text-white">
            <p> &copy;Library of Lowa State University| Yahya Faizar Ali</p>
        </div>
    </footer>
</body>
</html>