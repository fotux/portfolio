<x-index.layout color="black">
    <x-index.header>Susisiekite Su Manimi</x-index.header>



    <section
        class="flex flex-col md:flex-row justify-between items-start max-w-6xl mx-auto px-4 gap-10 md:gap-20 mb-5 md:md-20">
        <form method="POST" action="{{ route('send.email') }}" class="flex-1 space-y-4 w-full">
            @csrf

            <div>
                <x-form.form-label for="name">Vardas</x-form.form-label>
                <x-form.form-input type="text" name="name" placeholder="Įrašykite savo vardą" />
                @error('name')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-form.form-label for="email">Elektroninis paštas</x-form.form-label>
                <x-form.form-input type="email" name="email" placeholder="Įrašykite savo paštą" />
                @error('email')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <x-form.form-label for="review">Atsiliepimas</x-form.form-label>
                <x-form.form-textarea name="review" placeholder="Parašykite atsiliepimą" />
                @error('review')
                    <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            </div>

            <div class="flex justify-center">
                <x-form.form-button>Pateikti</x-form.form-button>
            </div>
        </form>

        <div class="space-y-1">
            <h2 class="font-bold">Darbo laikas:</h2>
            <h2>Pirmadienis: nedirbu</h2>
            <h2>Antradienis: nedirbu</h2>
            <h2>Trečiadienis: nedirbu</h2>
            <h2>Ketvirtadienis: nedirbu</h2>
            <h2>Penktadienis: nedirbu</h2>
            <h2 class="text-blue-800 font-bold">Šeštadienis nuo 8:00 iki 20:00</h2>
            <h2>Sekmadienis: nedirbu</h2>

            <div class="mt-5 md:mt-20">
                <h2 class="font-bold">Telefonas:</h2>
                <h2>+37099999999</h2>
                <h2 class="font-bold">Elektroninis paštas:</h2>
                <h2>monika.petraityte.dermicare@gmail.com</h2>
            </div>
        </div>

    </section>

    <x-index.header>Kabineto Adresas Žemėlapyje</x-index.header>

    <div class="flex justify-center ">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d813.9801543098305!2d23.95229491647447!3d54.92059637492568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e7220e526e5937%3A0x143a553adbeff453!2sMcDonald&#39;s!5e0!3m2!1sen!2slt!4v1746544678907!5m2!1sen!2slt"
            width="9999" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

</x-index.layout>
