@props(['reviews' => ''])

<section x-data="{index: 0, vissibleCount: 4,
    reviews:{{$reviews}},

    star_ratings: {
        5: '★ ★ ★ ★ ★',
        4: '★ ★ ★ ★ ☆',
        3: '★ ★ ★ ☆ ☆',
        2: '★ ★ ☆ ☆ ☆',
        1: '★ ☆ ☆ ☆ ☆',
        0: '☆ ☆ ☆ ☆ ☆',
                    },
     next() {
  if (this.index + this.vissibleCount < this.reviews.length) {
    this.index += this.vissibleCount;
  } else {
    this.index = 0;
  }
},
     prev() {
     if (this.index - this.vissibleCount >= 0)
     {
     this.index -= this.vissibleCount;
     }
     else
     {
     this.index = Math.max(this.reviews.length - this.vissibleCount,0);
     }
     },
        }"


  class="container mx-auto overflow-hidden lg:max-w-7xl lg:w-[1120px]">

{{-- button --}}

<div class="relative flex w-full justify-between font-semibold">
    <button class="bg-white px-4 py-2 rounded-full shadow border-2 border-transparent scale-85 hover:scale-100 hover:border-blue-800 transform-all duration-500" @click="prev" ><</button>
    <button class="bg-white px-4 py-2 rounded-full shadow border-2 border-transparent scale-85 hover:scale-100 hover:border-blue-800 transform-all duration-500" @click="next" >></button>
</div>

{{-- Card --}}

 <main class="flex flex-col items-center lg:items-start lg:flex-row lg:justify-evenly mb-10 lg:mb-20 flex-nowrap -mt-15 md:mt-0">
    <template x-for="(review, i) in reviews" :key="review.id">
        <a :href="`/review/edit/${review.id}`"
        <div :class="{'hidden': i < index || i >= index+4}" class="text-center w-60">

            {{-- id for count check --}}
            {{-- <p x-text="review.id"></p> --}}
            <img class="mx-auto" src="{{ asset('images/logo.svg') }}" href="/" alt="Brand Logo" width="70px">
            <h1 x-text="review.name"></h1>
            <div class="flex justify-center text-blue-800 text-xl border-t-1">
                <span x-text="star_ratings[review.rating]"></span>
            </div>
            <p x-text="review.review"></p>

        </div>
        </a>
    </template>
</main>

{{-- button vissable for user to edit/delete comment --}}
@auth
<div class="items-center flex justify-center">
    <x-button href="review">Pridėti Komentara</x-button>
</div>
@endauth


</section>



