<x-layout color="black">
    <x-header>Užpildykite Atsiliepimą</x-header>
    <form method="POST" action="/review/create" class="flex justify-center  ">
        @csrf
        <main class="space-y-4 w-full max-w-3xl p-5 md:pd-0 ">

        <div>
            <x-form.form-label for="name">Vardas</x-form.form-label>
            <x-form.form-input type="text" name="name" placeholder="Įrašykite savo vardą"/>
            @error('name')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>


        <div>
            <x-form.form-label for="review">Atsiliepimas</x-form.form-label>
            <x-form.form-textarea name="review" placeholder="Parašykite atsiliepimą"/>
            @error('review')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>

          <div class="border-b-2 border-blue-800 pb-4" x-data="{ rating: 0, hover: 0 }">
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

          <div class="flex justify-center">
          <x-form.form-button>Pateikti</x-form.form-button>
        </div>



        </main>
    </form>
</x-layout>



