@props(['id' => '', 'title' => '', 'paragraph' => '', 'image' => ''])


<div
    class="h-[500px] overflow-hidden  border-2 shadow w-full rounded-lg hover:outline-none hover:ring-2 hover:ring-blue-800 hover:border-blue-800 transition duration-300 ease-in-out">
    <a href="/blog/{{ $id }}" class="flex flex-col h-full justify-start">
        <h1 class="font-semibold font-serif text-blue-800 text-md text-center py-2">{{ $title }}</h1>
        <p class="text-sm my-2 text-gray-700 px-2">{{ $paragraph }}</p>
        <img class="object-cover w-full max-h-[50] h-full" src="{{ $image }}" alt="blogo paveikslėlis">
    </a>
</div>
