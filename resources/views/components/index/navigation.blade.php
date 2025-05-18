@props(['color' => 'gray-50'])

<nav
    class="text-black text-xl flex justify-evenly items-center py-2 mx-auto border-b border-{{ $color }} relative z-30 bg-gray-300/30">

    <a href="/"><img src="{{ asset('images/logo.svg') }}" href="/" alt="Brand Logo" width="70px"></a>

    <div class="lg:space-x-8 lg:text-sm text-gray-700 font-bold font-serif text-xs space-x-4">
        <a class="hidden sm:inline" href="{{ route('home') }}">Pradinis</a>
        <a href="{{ route('blog') }}">Blogas</a>
        <a href="{{ route('pricing') }}">Kainoraštis</a>
        <a href="{{ route('contact') }}">Kontaktai</a>

    </div>
    @auth
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="text-sm border-2 border-blue-800 bg-white font-bold rounded-full p-1"
                type="submit">Logout</button>
        </form>
    @endauth

</nav>
