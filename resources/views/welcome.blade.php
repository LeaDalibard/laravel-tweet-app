<x-master>
    <div class="container mx-auto">
        @auth
            <button
                class="bg-blue-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                type="button" style="transition: all .15s ease">
                <a href="{{ url('/tweets') }}">Home</a>
            </button>
            <button
                class="bg-blue-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                type="button" style="transition: all .15s ease">
                <a href="{{ route('logout') }}">Logout</a>
            </button>


        @else
            <button
                class="bg-blue-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                type="button" style="transition: all .15s ease">
                <a href="{{ route('login') }}">Login</a>
            </button>

            @if (Route::has('register'))
                <button
                    class="bg-blue-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1"
                    type="button" style="transition: all .15s ease">
                    <a href="{{ route('register') }}">Register</a>
                </button>


            @endif
        @endauth
    </div>
</x-master>
