<x-index.layout color="black">
    <x-index.header>Kainoraštis</x-index.header>

    <main class="container mx-auto max-w-sm md:max-w-4xl mb-10 md:mb-20 p-5">
        <section class="flex flex-col justify-around items-center space-y-4">
            <x-index.price-item :price="50">Mechaninis valymas</x-index.price-item>
            <x-index.price-item :price="70">Anti-Aging Procedūra</x-index.price-item>
            <x-index.price-item :price="40">Odos Šveitimas</x-index.price-item>
            <x-index.price-item :price="60">Cheminis Šveitimas</x-index.price-item>
            <x-index.price-item :price="45">Plaukų Depiliacija</x-index.price-item>
            <x-index.price-item :price="55">Vyrų Veido Procedūra</x-index.price-item>
            <x-index.price-item :price="75">Giluminis Veido Valymas</x-index.price-item>
            <x-index.price-item :price="65">Odos Drėkinimas</x-index.price-item>
            <x-index.price-item :price="80">Plaukų Priežiūra</x-index.price-item>
            <x-index.price-item :price="90">Raukšlių Sumažinimas</x-index.price-item>

        </section>
    </main>

    <x-index.header>Geriausia dovana - dovanų kuponas</x-index.header>
    <section class="grid grid-cols-1 md:grid-cols-2">

        <div>
            <img src="{{ asset('images/dovanu_kuponas.jpg') }}" alt="dovanu kuponas"
                class="w-full h-auto object-cover max-h-[400px]">
        </div>
        <div class="flex-1 text-lg space-y-10 px-5 md:px-20 bg-gray-300/30 pt-0 md:pt-15">
            <h1 class="font-semibold tet-xl mt-10">Ieškote išskirtinės dovanos?</h1>
            <h1>Padovanokite galimybę pasirūpinti savimi – grožio procedūra yra ne tik maloni patirtis, bet ir
                rūpestingumo gestas.
                Dovanų kuponai nuo 20 € iki 100 € – įsigyti galima susisiekus el. paštu.</h1>
            <div class="flex justify-center mt-5">
                <x-index.button>Susisiekite</x-index.button>
            </div>
        </div>
    </section>
</x-index.layout>
