<x-layout color="black">
    <x-header>Kainoraštis</x-header>

    <main class="container mx-auto max-w-sm md:max-w-4xl mb-10 md:mb-20">
        <section class="flex flex-col justify-around items-center space-y-4">
            <x-price-item :price="50">Mechaninis valymas</x-price-item>
            <x-price-item :price="70">Anti-Aging Procedūra</x-price-item>
            <x-price-item :price="40">Odos Šveitimas</x-price-item>
            <x-price-item :price="60">Cheminis Šveitimas</x-price-item>
            <x-price-item :price="45">Plaukų Depiliacija</x-price-item>
            <x-price-item :price="55">Vyrų Veido Procedūra</x-price-item>
            <x-price-item :price="75">Giluminis Veido Valymas</x-price-item>
            <x-price-item :price="65">Odos Drėkinimas</x-price-item>
            <x-price-item :price="80">Plaukų Priežiūra</x-price-item>
            <x-price-item :price="90">Raukšlių Sumažinimas</x-price-item>

        </section>
    </main>
</x-layout>
