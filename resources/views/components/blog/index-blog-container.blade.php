
@php
    $offsets = ['md:-translate-y-10', 'md:translate-y-8', '', 'md:translate-y-8', 'md:-translate-y-10'];
@endphp

<section  id="blogas" class="container mx-auto flex flex-col md:flex-row md:flex  md:flex-wrap md:justify-between items-center mt-10 mb-10 md:mt-40 md:mb-40">


    {{-- <x-blog.index-blog-photo link="/blog" src="{{ asset('images/before-and-after/antiaging-beauty-treatment.jpg') }}" offset="md:-translate-y-10">Skaityti Toliau</x-blog.index-blog-photo>
    <x-blog.index-blog-photo src="https://placehold.co/800x600/red/white?text=Image+3" offset="md:translate-y-8">Skaityti Toliau</x-blog.index-blog-photo>
    <x-blog.index-blog-photo src="https://placehold.co/800x600/red/white?text=Image+3">Skaityti Toliau</x-blog.index-blog-photo>
    <x-blog.index-blog-photo src="https://placehold.co/800x600/red/white?text=Image+3" offset="md:translate-y-8">Skaityti Toliau</x-blog.index-blog-photo>
    <x-blog.index-blog-photo src="https://placehold.co/800x600/red/white?text=Image+3" offset="md:-translate-y-10">Skaityti Toliau</x-blog.index-blog-photo> --}}

    @foreach ($blog->take(5) as $index => $blogimg)

    @php
    // remained value defines offsets arr item
        $offset = $offsets[$index % count($offsets)];
    @endphp

         <x-blog.index-blog-photo link="/blog" :src="asset('storage/' . $blogimg->images->first()->image_path)" :offset="$offset">Skaityti Toliau</x-blog.index-blog-photo>
    @endforeach

</section>