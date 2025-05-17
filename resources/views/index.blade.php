<x-index.layout>
    <x-index.hero/>

    <section class="container mx-auto lg:max-w-7xl ">
    <x-index.header>Pradinė odos būklė ir rezultatas iškart po procedūros</x-index.header>
    <x-index.compare/>
    <x-index.header id="apie">Monikos kelias: nuo pradžios iki pasiekimų grožio srityje</x-index.header>
    <x-index.about-me/>
    <x-index.header>Mano Blogas</x-index.header>
    <x-blog.index-blog-container :blog="$blog"/>
    </section>

    <x-index.slider/>
    <x-index.header>Atsiliepimai</x-index.header>
    <x-reviews.reviews-container :reviews="json_encode($reviews)"/>



</x-index.layout>