<section class="w-full relative lg:h-[800px] h-[700px] -mt-25 z-[-1]">
    <!-- Full-width Image -->
    <img src="{{ asset('images/cosmetologist.jpg') }}" alt="" class="opacity-90 w-full h-full object-cover">

    <!-- Text overlay with some left margin/padding -->
    <div class="font-serif font-light absolute top-1/2 lg:left-30 transform -translate-y-1/8  text-white p-4">
        <h3 class="text-sm font-serif font-semibold text-blue-800 ">Kosmetologė iš Kauno</h3>
        <h2 class="text-3xl lg:text-6xl mt-1 font-semibold  font-serif ">Monika Petraitytė</h2>
        <p class="text-sm lg:text-xl mt-6 font-medium font-sans ml-1 ">Jūsų kelias į natūralų grožį ir pasitikėjimą savimi, kuriant harmoniją tarp švelnumo ir profesionalumo.</p>
             {{-- button (problem was not clickable) --}}
        {{-- <div class="z-50 inline-block mt-5 transition-all scale-110 duration-200 bg-blue-800 hover:bg-blue-700 hover:scale-11 rounded-full border border-black/50 ">
            <a href="/">
            <button class="flex items-center bg-transparent text-white text-sm rounded-2xl pr-4 font-sans font-semibold "><img src="{{ asset('images/phone.png') }}" alt="" width="30px" class="mr-2">Registracija</button>
            </a>
        </div> --}}
    </div>

</section>

{{-- fixed problem above with absotue button... but quite hate this idea because on langer sreen it jumps randomly --}}
<div class="absolute top-10/14 left-5 lg:left-35 md:top-2/3 lg:top-3/4 transform -translate-y-1/2 inline-block transition-all scale-110 duration-200 bg-blue-800 hover:bg-blue-700 hover:scale-120 rounded-full border border-black/50">
    <a href="/">
        <button class="flex items-center bg-transparent text-white text-sm rounded-2xl pr-4 font-sans font-semibold">
            <img src="{{ asset('images/phone.png') }}" alt="" width="30px" class="mr-2">Registracija
        </button>
    </a>
</div>