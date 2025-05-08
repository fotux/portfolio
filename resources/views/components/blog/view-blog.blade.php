<x-layout color="black">

<div class="max-w-4xl mx-auto mt-10" x-data="{
    images: [
                        '{{ asset('images/before-and-after/antiaging-beauty-treatment.jpg') }}',
                        '{{ asset('images/before-and-after/monika_cosmetologist.jpg') }}',
                        'https://placehold.co/800x600/green/white?text=Image+3',
                        'https://placehold.co/800x600/purple/white?text=Image+4'
                ],
    index:0,
    next() { if(this.index + 1 < this.images.length)
    this.index += 1;
    else this.index=0;
    },
    prev() { if(((this.index -1 + this.images.length) % this.images.length) < this.images.length)
    this.index = ((this.index -1) + this.images.length);
    },
}">

    <h1 class="font-semibold font-serif text-blue-800 text-lg text-center">{{ $blog->title }}</h1>
    <p class="text-sm my-2 text-gray-700 px-2">{{ $blog->paragraph }}</p>

    <div class="relative flex justify-between ">
        <button @click="prev" class="border text-white bg-black  rounded-full px-2 font-bold"><</button>
        <button @click="next" class="border text-white bg-black  rounded-full px-2 font-bold">></button>
    </div>

    <img class="object-cover md:h-150 w-full" :src="images[index]" alt="blogo paveikslėlis">

</div>



    </x-layout>

