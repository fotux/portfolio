<x-index.layout color="black">
    <x-index.header>Įkelkite naują blogą</x-index.header>
    <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data" class="flex justify-center  ">
        @csrf
        <main class="space-y-4 w-full max-w-3xl p-5 md:pd-0 pb-10">

            <div>
                <x-form.form-label for="title">Pavadinimas</x-form.form-label>
                <x-form.form-input type="text" name="title" placeholder="Įrašykite pavadinimą" />
                @error('title')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div>
                <x-form.form-label for="paragraph">Pastraipa</x-form.form-label>
                <x-form.form-textarea name="paragraph" placeholder="Įveskite pastraipa" />
                @error('paragraph')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="">
                <x-form.form-label for="image_path">Įkelkite paveikslėlius</x-form.form-label>
                <input
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm text-gray-800 placeholder-gray-500"
                    type="file" name="image_path[]" multiple>
                @error('image_path')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div class="flex justify-center">
                <x-form.form-button>Pateikti</x-form.form-button>
            </div>




        </main>
    </form>
</x-index.layout>
