<header class="md:h-15v bg-header flex flex-col md:flex-row justify-between px-6 py-4 shadow-lg border-b border-gray-700">
    <!-- Logo -->
    <img class="w-1/3 h-16 md:w-1/12 md:max-h-full" src="{{ asset('https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExeXF5bDBoaWZ1d2RkNXBkaWJtcHcyZmp2ZW5ucXllNHIwY3k4dW5kYSZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/5GTaXWH5axV8lofbxM/giphy.gif') }}" alt="logo">

    <!-- Título con mejor tipografía -->
    <h1 class="hidden md:block text-white text-4xl font-extrabold tracking-widest font-serif">
        CHAMPS DE LEAGUE OF LEGENDS
    </h1>

    <!-- Controles de usuario -->
    <div class="flex items-center gap-4">
        @auth
            <span class="text-white font-medium text-lg font-mono">{{ auth()->user()->name }}</span>
            <form action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition font-semibold">Logout</button>
            </form>

            @if (session('mensaje'))
                <div style="background-color: green; color: white; padding: 10px; margin-bottom: 10px; text-align: center;">
                    {{ session('mensaje') }}
                </div>
            @endif
        @endauth

        @guest
            <a class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition font-semibold" href="{{ route('login') }}">Login</a>
            <a class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition font-semibold" href="{{ route('register') }}">Register</a>
        @endguest
    </div>
</header>
