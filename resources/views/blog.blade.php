<x-layout color="black">
<x-header>Paskaitykite Mano Rašytų Patarimų</x-header>

@auth
<div class="flex flex-center justify-center">
<x-button href="blog/create">Pridėti Blogą</x-button>
</div>
@endauth

<section class="p-2 md:grid md:grid-cols-3 md:gap-4 md:gap-y-10 md:max-w-6xl md:mx-auto md:p-5 space-y-5 md:space-y-0 md:mb-10">


    @foreach ($blog as $post )
    <div>
        <x-blog.blog-page-component id="{{ $post->id }}" title="{{ $post->title }}" paragraph="{{ $post->paragraph }}"
        image=" {{ $post->images->first() ? asset('storage/' . $post->images->first()->image_path) : '' }} "/>

    </div>
    @endforeach

</section>

</x-layout>

