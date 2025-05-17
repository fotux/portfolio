<script>
    function compare() {
        return {
            currentIndex: 0,
            descriptions: [{
                    title: 'Veido procedūra: Mechaninis valymas',
                    text: 'Šiandien atlikau mechaninį veido valymą. Procedūra praėjo sklandžiai – oda buvo tinkamai paruošta, atliktas giluminis porų valymas. Buvo šiek tiek paraudimo, bet tai normali reakcija po tokio tipo procedūros. Klientės oda po valymo atrodė švaresnė, lygesnė, o poros – pastebimai sumažėjusios. Rezultatu likau patenkinta.'
                },
                {
                    title: 'Veido procedūra: Drėkinamoji kaukė',
                    text: 'Ši procedūra skirta intensyviam odos drėkinimui. Naudojome hialurono rūgšties kaukę, kuri padeda odai atgauti drėgmę ir elastingumą. Po procedūros oda tapo žymiai drėgnesnė, sumažėjo smulkios raukšlelės. Klientė pastebėjo, kad oda tapo švytinti ir atgaivinta.'
                },
                {
                    title: 'Veido procedūra: Antiaging terapija',
                    text: 'Ši procedūra skirta kovai su senėjimo požymiais. Naudojome specialius serums su peptidais ir antioksidantais. Matomas odos stangrumo padidėjimas, raukšlių sumažėjimas ir bendrojo veido kontūro pagerinimas. Rekomenduojama kartoti procedūrą kas 3-4 savaites norint palaikyti rezultatą.'
                },
                {
                    title: 'Veido procedūra: Pigmentacijos mažinimas',
                    text: 'Procedūros metu naudojome specialius ingredientus, skirtus pigmentacijos dėmėms mažinti. Matomi rezultatai jau po pirmos procedūros - pigmentinės dėmės tapo šviesesnės, odos tonas - vienodesnis. Rekomenduojama vengti tiesioginių saulės spindulių po procedūros.'
                },
                {
                    title: 'Veido procedūra: Aknės gydymas',
                    text: 'Procedūra skirta probleminei odai su aknės pažeidimais. Naudojome specialius priešuždegiminius produktus, kurie mažina bakterijų kiekį ir odos uždegimą. Po procedūros matomas akivaizdus paraudimų ir uždegimų sumažėjimas, odos būklė pagerėjo.'
                }
            ],
            images: [
                '{{ asset('images/before-and-after/antiaging-beauty-treatment.jpg') }}',
                '{{ asset('images/before-and-after/2.jpg') }}',
                'https://placehold.co/800x600/red/white?text=Image+3',
                'https://placehold.co/800x600/green/white?text=Image+4',
                'https://placehold.co/800x600/purple/white?text=Image+5'
            ],
            next() {
                this.currentIndex = (this.currentIndex + 1) % this.images.length;
            },
            prev() {
                this.currentIndex = (this.currentIndex - 1 + this.images.length) % this.images.length;
            }
        }
    }
</script>

<section class="lg:grid lg:grid-cols-3 lg:max-w-5xl lg:mx-auto" x-data="compare()">
    {{--  text-column --}}
    <div class="lg:col-span-1 ">
        <div class="p-4">
            <h1 class="text-lg font-semibold lg:mt-10 font-serif text-blue-800" x-text=descriptions[currentIndex].title>
            </h1>
            <p class="mt-5 text-md md:mr-6 text-left" x-text=descriptions[currentIndex].text></p>
        </div>
    </div>


    {{-- img --}}
    <div class="lg:col-span-2 aspect-[4/3] relative p-4 md:p-0">
        <img class="border-3 border-blue-800 rounded-2xl w-full object-cover h-full" :src="images[currentIndex]"
            alt="">

        <button @click="prev"
            class="font-extrabold absolute right-4 md:right-0 top-1/2 transform -translate-y-1/2 translate-x-1/2 border-2 px-1.5 bg-black text-white rounded-full border-blue-800">→</button>
        <button @click="next"
            class="font-extrabold absolute left-4 md:left-0 top-1/2 transform -translate-y-1/2 -translate-x-1/2 border-2 px-1.5 bg-black text-white rounded-full border-blue-800">←</button>
    </div>

</section>
