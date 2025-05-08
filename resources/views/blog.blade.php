<x-layout color="black">
<x-header>Paskaitykite Mano Rašytų Patarimų</x-header>

<section class="md:grid md:grid-cols-3 md:gap-4 md:gap-y-10 md:max-w-6xl md:mx-auto md:p-5 space-y-5 md:space-y-0 md:mb-10">

    @foreach ($blog as $post )
    <div>
        <x-blog.blog-page-component id="{{ $post->id }}" title="{{ $post->title }}" paragraph="{{ $post->paragraph }}" image="{{ asset('images/dovanu_kuponas.jpg') }}"/>
    </div>
    @endforeach


    <x-blog.blog-page-component title="Testavimo vieta" paragraph="taip taip ir anaip" image="{{ asset('images/dovanu_kuponas.jpg') }}"/>
    <x-blog.blog-page-component title="Veido dininkas" paragraph="taip taip ir anaip" image="{{ asset('images/before-and-after/antiaging-beauty-treatment.jpg') }}"/>
    <x-blog.blog-page-component title="loremadsaas  dsa ads ad asd asadasdsada" paragraph="taip taip ir anaisdasadasjdhauinais aiudsabnidbnjisanbjdbnasjj aa iuhip" image="{{ asset('images/before-and-after/antiaging-beauty-treatment.jpg') }}"/>
    <x-blog.blog-page-component title="Veido dininkas" paragraph="taip taip ir sadasdsdasaidhjsadh uidasbusdabuadsbuybayba sdsajasindsaiip taip ir sadasdsdasaidhjsadh uidasbusdabuadsbuybayba sdsajasindsai a iundsain dianij nadsui auisnd iand nsad ioaois jdnausn diuans asdb asbiunda sn nasn uidansuid a iundsain dianij nadsui auisnd iand nsad ioaois jdnausn diuans asdb asbiunda sn nasn uidansuidubdasuibadbasub bahdsauihiusahdiash bdabs bsbadd basyu hdauishduasydy basydb basdbyasuid basudbasubdusah udas yanaip" image="{{ asset('images/dovanu_kuponas.jpg') }}"/>


</section>

</x-layout>

