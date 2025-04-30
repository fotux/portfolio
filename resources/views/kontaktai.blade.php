<x-layout color="black">
<x-header>Kontaktai</x-header>


{{-- modify later --}}
<section class="flex justify-around items-start">

    <div class="space-y-1">
        <h2 class="font-bold">Darbo laikas: </h2>
        <h2>Pirmadienis: nedirbu</h2>
        <h2>Antradienis: nedirbu</h2>
        <h2>Trečiadienis: nedirbu</h2>
        <h2>Ketvirtadienis: nedirbu</h2>
        <h2>Penktadienis: nedirbu</h2>
        <h2 class="text-blue-800 font-bold">Šeštadienis nuo 8:00 iki 20:00</h2>
        <h2>Sekmadienis: nedirbu</h2>
    </div>


       {{-- Modify everything this is just a sample for style --}}
       <form action="#" method="POST" class="space-y-4 p-4 border rounded-lg shadow-md">
        <div>
            <label for="name" class="block font-medium">Vardas</label>
            <input type="text" id="name" name="name" class="w-full p-2 border rounded-md" placeholder="Įrašykite savo vardą" required>
        </div>

        <div>
            <label for="surname" class="block font-medium">Pavardė</label>
            <input type="text" id="surname" name="surname" class="w-full p-2 border rounded-md" placeholder="Įrašykite savo pavardę" required>
        </div>

        <div>
            <label for="message" class="block font-medium">Žinutė</label>
            <textarea id="message" name="message" rows="4" class="w-full p-2 border rounded-md" placeholder="Įrašykite savo žinutę" required></textarea>
        </div>

        <div>
            <button type="submit" class="w-full py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Pateikti</button>
        </div>
    </form>


    <div class="flex flex-col gap-1">
        <h2><span class="font-bold">Telefonas:</span>+37099999999 </h2>
        <h2><span class="font-bold">Emailas:</span>judu@gmail.com</h2>
        </div>
</section>

<x-test/>
</x-layout>

