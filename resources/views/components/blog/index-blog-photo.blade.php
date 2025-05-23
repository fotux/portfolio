@props(['src', 'link' => '#', 'offset' => ''])

<div
    class=" md:w-1/5 relative transform p-2 {{ $offset }} group transition-transform duration-500 hover:scale-105 ">
    <a href="{{ $link }}">
        <img src="{{ $src }}" alt="img"
            class="rounded-xl h-52 w-70 md:w-full object-cover opacity-40 border-2 hover:opacity-100 hover:outline-none hover:ring-2 hover:ring-blue-800 hover:border-blue-800 transition-all duration-700 ease-in-out">
    </a>
    <div class="absolute inset-0 flex justify-center items-center text-center pointer-events-none">
        <p class="font-serif font-semibold text-lg transition-opacity duration-500 group-hover:opacity-0">
            {{ $slot }}</p>
    </div>
</div>
