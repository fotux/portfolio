@props(['href' => '/'])

    <a href="{{ $href }}">
    <button class="font-semibold bg-white px-4 py-2 rounded-full shadow border-2 border-transparent scale-90 hover:scale-100 hover:border-blue-800 transform-all duration-500 mb-5 md:md-10">{{ $slot }}</button>
    </a>
