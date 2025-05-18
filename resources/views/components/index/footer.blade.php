<footer class="bg-black text-white w-full lg:py-4">
    <section class="flex justify-between lg:justify-around items-start md:p-2 px-2">

        <div class="text-start">
            <h1 class="text-xs lg:text-lg mb-2 font-semibold">Nuorodos</h1>
            <div class="flex flex-col text-gray-300">
                <a class="text-xs md:text-sm" href="{{ route('contact') }}">Kontaktai</a>
                <a class="text-xs md:text-sm" href="{{ route('blog') }}">Blogas</a>
                <a class="text-xs md:text-sm" href="{{ route('pricing') }}">Kainoraštis</a>

            </div>
        </div>

        <div class="text-start">
            <h1 class="text-xs lg:text-lg mb-2 font-semibold">Kontaktai</h1>
            <div class="flex flex-col text-gray-300">
                <a class="text-xs md:text-sm" href="tel:+37099999999">Telefonas: +37099999999</a>
                <a class="text-xs md:text-sm md:inline-block hidden"
                    href="mailto:monika.petraityte.dermicare@gmail.com">Emailas:
                    monika.petraityte.dermicare@gmail.com</a>

            </div>
        </div>

        <div>
            <h1 class="text-xs lg:text-lg mb-2 font-semibold">©DermiCare</h1>
            <div class="flex  justify-start space-x-2">
                <a class="w-4 lg:w-6" href="https://www.instagram.com/dermicare_monikapetraityte/"><img
                        src="{{ asset('images/instagram-white-icon.svg') }}" alt="Instagram"></a>
                <a class="w-4 lg:w-6" href="https://www.facebook.com/monika.petraityte.58"><img
                        src="{{ asset('images/facebook-round-color-icon.svg') }}" alt="Facebook"></a>
            </div>
        </div>
    </section>
</footer>
