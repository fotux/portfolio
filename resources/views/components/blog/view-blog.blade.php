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




    <div x-show="images.length === 0" class="text-center font-semibold text-red-500"> Nėra įkeltų paveilėlių</div>

        <h1 class="font-semibold font-serif text-blue-800 text-md md:text-lg text-center p-2">{{ $blog->title }}</h1>
        <p class="text-xs md:text-sm my-2 text-gray-700 px-2">{{ $blog->paragraph }}</p>

        <div class="p-2 md:p-0 md:aspect-3/2 relative rounded-2xl overflow-hidden">
            <img class="h-full w-full object-contain"
            :src="`{{ asset('storage/') }}/${images[index].image_path}`"
            alt="blogo paveikslėlis">
            <button @click="prev" class="font-extrabold absolute right-4 md:right-4 top-1/2 transform -translate-y-1/2 translate-x-1/2 border-2 px-1  bg-black text-white rounded-full border-blue-800">→</button>
            <button @click="next" class="font-extrabold absolute left-4 md:left-4 top-1/2 transform -translate-y-1/2 -translate-x-1/2 border-2 px-1 bg-black text-white rounded-full border-blue-800">←</button>
        </div>


    @auth
    <form method="POST" action="/blog/{{ $blog->id }}" class="flex justify-center md:pt-5">
        @csrf
        @method('DELETE')
        <x-form.form-button>Delete</x-form.form-button>
    </form>
    @endauth



    </div>
    </x-layout>
