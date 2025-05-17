<x-index.layout color="black">
    <x-index.header>Prisijunkite</x-index.header>

    <section class="flex justify-center items-center mb-30">
        <div class="w-full max-w-3xl p-5">
    <form method="POST" action="/login">
        @csrf
        <div class="flex flex-col space-y-5">
        <div>
            <x-form.form-label for="name">Vardas</x-form.form-label>
            <x-form.form-input type="text" name="name" placeholder="Įrašykite savo vardą"/>
            @error('name')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>

        <div>
            <x-form.form-label for="password">Slaptažodis</x-form.form-label>
            <x-form.form-input type="password" name="password" placeholder="Įrašykite savo slaptažodį"/>
            @error('password')
            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
        @enderror
        </div>

        <div class="flex justify-center">
            <x-form.form-button>Prisijungti</x-form.form-button>
          </div>



    </div>
    </form>
</div>
</section>

</x-index.layout>

