<x-layout color="black">

<div class="md:max-w-4xl md:mx-auto md:my-10" x-data="{
    images: {{json_encode($blogImages)}},
    index:0,
    next() { if(this.index + 1 < this.images.length)
    this.index += 1;
    else this.index=0;
    },
    prev() {
    if(this.index === 0)
    this.index = ((this.index -1) + this.images.length)
    else this.index -= 1;
    },
}">

    <h1 class="font-semibold font-serif text-blue-800 text-md md:text-lg text-center p-2">{{ $blog->title }}</h1>
    <p class="text-xs md:text-sm my-2 text-gray-700 px-2">{{ $blog->paragraph }}</p>


    <div x-show="images.length === 0" class="text-center font-semibold text-red-500"> Nėra įkeltų paveilėlių</div>
    <div class="flex justify-around p-2"  x-show="images.length > 0">
        <button @click="prev" class="text-white bg-black/90 hover:bg-black px-1 md:px-3 font-bold rounded-l-2xl"><</button>
        <div class="h-100 md:h-150 w-full items-center flex justify-center overflow-hidden" >
        <img class="object-cover h-full w-full"
            :src="`{{ asset('storage/') }}/${images[index].image_path}`"
            alt="blogo paveikslėlis"
           >
        </div>
        <button @click="next" class=" text-white bg-black/90 hover:bg-black px-1 md:px-3 font-bold rounded-r-2xl">></button>
    </div>


</div>
    </x-layout>
