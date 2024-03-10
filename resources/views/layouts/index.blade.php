<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <nav class="bg-gray-800 text-white px-4 py-2 flex justify-between">
        <div class="flex items-center">
            <span class="text-xl font-bold">Your Brand</span>
        </div>

        <div class="hidden md:flex space-x-4">
            <a href="{{ route('home') }}" class="hover:text-gray-400">Home</a>
            <a href="#" class="hover:text-gray-400">Posts</a>
            <a href="#" class="hover:text-gray-400">About Us</a>
        </div>


        {{-- when you register succesfully and get redirected to the dashboard
                page your name and logout options will be displayed on top of the page
                rather than seeing the register option and you have already registered --}}
        @auth
            <li>
                {{-- when logged in this enables you to see the name of the person logged in --}}
                <a href="" class="p-3">{{ auth()->user()->name }}</a>
            </li>
            <li>
                <form action="{{ route('logout') }}" method="post" class=" p-3 inline">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
        @endauth

        @guest
        <div class="flex space-x-2">
            <a href="{{ route('login') }}" class="px-3 py-2 bg-blue-500 hover:bg-blue-700 rounded text-white">Login</a>
            <a href="{{ route('register') }}"
                class="px-3 py-2 border border-white hover:border-gray-400 rounded text-white">Register</a>
        </div>
        @endguest

    </nav>

    @yield('content')
</body>

</html>
