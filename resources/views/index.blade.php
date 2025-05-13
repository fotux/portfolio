<x-layout>
    <x-hero/>

    <section class="container mx-auto lg:max-w-7xl ">
    <x-header>Pradinė odos būklė ir rezultatas iškart po procedūros</x-header>
    <x-compare/>
    <x-header id="apie">Monikos kelias: nuo pradžios iki pasiekimų grožio srityje</x-header>
    <x-about-me/>
    <x-header>Mano Blogas</x-header>
    <x-blog.index-blog-container :blog="$blog"/>
    </section>

    <x-slider/>
    <x-header>Atsiliepimai</x-header>
    <x-reviews.reviews-container :reviews="json_encode($reviews)"/>

</x-layout>