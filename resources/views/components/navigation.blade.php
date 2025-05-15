@props(['color' => 'gray-50'])

<nav class="text-black text-xl flex justify-evenly items-center py-2 mx-auto border-b border-{{$color}} relative z-30 bg-gray-300/30">

    <a href="/"><img src="{{ asset('images/logo.svg') }}" href="/" alt="Brand Logo" width="70px"></a>


    <div  class="lg:space-x-8 lg:text-sm text-gray-700 font-bold font-serif text-xs space-x-4">


        <a class="hidden sm:inline" href="/">Pradinis</a>
        <a href="/blog">Blogas</a>
        <a href="/kainoraštis">Kainoraštis</a>
        {{-- <a href="/apie">Apie mane</a> --}}
        <a href="/kontaktai">Kontaktai</a>


    </div>

    @auth

    <form action="/logout" method="POST">
    @csrf
    <button type="submit" class="bg-blue-800 text-white md:px-2 py-1 font-semibold border-2 border-black text-xs md:text-sm rounded-full  ">Logout</button>
    </form>
    @endauth

</nav>