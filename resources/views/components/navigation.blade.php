@props(['color' => 'gray-50'])

<nav class=" text-black text-xl flex justify-evenly items-center py-2 mx-auto border-b border-{{$color}}">

    <a href="/"><img src="{{ asset('images/logo.svg') }}" href="/" alt="Brand Logo" width="70px"></a>


    <div  class="lg:space-x-8 lg:text-sm text-gray-700 font-bold font-serif text-xs space-x-4">


        <a class="hidden sm:inline" href="/">Pradinis</a>
        <a class="hidden sm:inline" href="#blogas">Blogas</a>
        <a href="/kainoraštis">Kainoraštis</a>
        <a href="#apie">Apie mane</a>
        <a href="/kontaktai">Kontaktai</a>


    </div>

</nav>