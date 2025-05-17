@props(['reviews'])


<script>
    function reviewsCarousel() {
        return {
            index: 0,
            visibleCount: 4,
            reviews: @json($reviews),
            star_ratings: {
                5: '★ ★ ★ ★ ★',
                4: '★ ★ ★ ★ ☆',
                3: '★ ★ ★ ☆ ☆',
                2: '★ ★ ☆ ☆ ☆',
                1: '★ ☆ ☆ ☆ ☆',
                0: '☆ ☆ ☆ ☆ ☆',
            },
            next() {
                if (this.index + this.visibleCount < this.reviews.length) {
                    this.index += this.visibleCount;
                } else {
                    this.index = 0;
                }
            },
            prev() {
                if (this.index - this.visibleCount >= 0) {
                    this.index -= this.visibleCount;
                } else {
                    this.index = Math.max(this.reviews.length - this.visibleCount, 0);
                }
            },

        }

    }
</script>

<section x-data="reviewsCarousel()" class="container mx-auto overflow-hidden lg:max-w-7xl lg:w-[1120px]">

    {{-- button --}}

    <div class="relative flex w-full justify-between font-semibold">
        <button
            class="bg-white px-4 py-2 rounded-full shadow border-2 border-transparent scale-85 hover:scale-100 hover:border-blue-800 transform-all duration-500"
            @click="prev">
            < </button>

                <button
                    class="bg-white px-4 py-2 rounded-full shadow border-2 border-transparent scale-85 hover:scale-100 hover:border-blue-800 transform-all duration-500"
                    @click="next">
                    ></button>
    </div>

    {{-- Card --}}


    <main class="flex flex-col items-center lg:items-start lg:flex-row lg:justify-center mb-10 lg:mb-20 -mt-15 md:mt-0 ">
        <template x-for="(review, i) in reviews">
            @auth
            <a :href="`/review/edit/${review.id}`" @endauth>
                <div x-show="i >= index && i < index + visibleCount" class="text-center w-60">
                    <img class="mx-auto" src="{{ asset('images/logo.svg') }}" href="/" alt="Brand Logo"
                        width="70px">
                    <h1 x-text="review.name"></h1>
                    <div class="flex justify-center text-blue-800 text-xl border-t-1 mx-3">
                        <span x-text="star_ratings[review.rating]"></span>
                    </div>
                    <p class="p-2" x-text="review.review"></p>
                    {{-- <span x-text="index"></span> --}}
                </div>
                @auth
                </a>
            @endauth
        </template>
    </main>





    <div class="items-center flex justify-center">
        <x-index.button href="{{ route('review.create') }}">Pridėti Komentara</x-index.button>
    </div>



</section>
