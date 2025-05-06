<x-layout color="black">
    <x-header>Koreguoti/Trinti atsiliepimą</x-header>
    <form method="POST" action="/review/edit/{{ $review->id }}" class="flex justify-center  ">
        @csrf
        @method('PATCH')
        <main class="space-y-4 w-full max-w-3xl p-5 md:pd-0 ">
        {{-- {{ dd($review) }} --}}

        <div>
            <x-form.form-label for="name">Vardas</x-form.form-label>
            <x-form.form-input value="{{ $review->name }}" type="text" name="name" placeholder="Įrašykite savo vardą"/>
            @error('name')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>


        <div>
            <x-form.form-label for="review">Atsiliepimas</x-form.form-label>
            <x-form.form-textarea value="{{ $review->review }}"  name="review" placeholder="Parašykite atsiliepimą"/>
            @error('review')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

          <div class="border-b-2 border-blue-800 pb-4" x-data="{ rating: {{ $review->rating }}, hover: {{ $review->rating }} }">
            <label class="block text-lg font-semibold text-gray-700 mb-2"  for="rating">Vertinimas</label>
            <template x-for="star in 5" >
                <button

                class="text-3xl"
                type="button"
                :class="{
                    'text-blue-800': star<=hover || star<=rating,
                    'text-gray-300': star>hover && star>rating
                }"
                  @click="rating = star"
                  @mouseover="hover = star"
                  @mouseleave="hover = rating"

                >★</button>
            </template>
            <input type="hidden" name="rating" :value="rating">
            @error('rating')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
            @enderror
          </div>
          <div class="flex justify-center pt-5">
          <x-form.form-button>Update</x-form.form-button>
        </div>
        </main>
    </form>


    <form method="POST" action="/review/edit/{{ $review->id }}" class="flex justify-center mb-5">
        @csrf
        @method('DELETE')
            <x-form.form-button>Delete</x-form.form-button>
    </form>

</x-layout>



