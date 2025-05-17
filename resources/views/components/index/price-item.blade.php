@props(['price' => ''])

<div class="flex w-full justify-between items-start">
    <h1 class="text-left font-serif">{{ $slot }}</h1>
    <span class="line"></span>
    <p class="text-right text-blue-800 font-bold">{{ $price }}€</p>
</div>
