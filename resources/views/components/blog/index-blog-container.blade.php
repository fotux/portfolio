@php
    $offsets = ['md:-translate-y-10', 'md:translate-y-8', '', 'md:translate-y-8', 'md:-translate-y-10'];
@endphp

<section
    class="container mx-auto flex flex-col md:flex-row md:flex  md:flex-wrap md:justify-between items-center mt-10 mb-10 md:mt-40 md:mb-40 ">

    @foreach ($blog->take(5) as $index => $blogimg)
        @php
            $offset = $offsets[$index % count($offsets)];
        @endphp

        <x-blog.index-blog-photo link="/blog" :src="asset('storage/' . $blogimg->images->first()->image_path)" :offset="$offset">Skaityti
            Toliau</x-blog.index-blog-photo>
    @endforeach

</section>
