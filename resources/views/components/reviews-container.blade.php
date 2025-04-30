
<section x-data="{index: 0, vissibleCount: 4,
reviews: [
  { id: 1, name: 'Monika Petraitytė', rating: 5, text: 'Labai patiko! Tikrai rekomenduoju visiems, kas ieško kokybės ir malonaus aptarnavimo.' },
  { id: 2, name: 'Tomas Jankauskas', rating: 4, text: 'Labai geras aptarnavimas ir greitas procesas.' },
  { id: 3, name: 'Agne Rakauskaitė', rating: 3, text: 'Viskas buvo gerai, bet trūko šiek tiek asmeniškumo.' },
  { id: 4, name: 'Petras Vaitkevičius', rating: 5, text: 'Išskirtinė paslauga ir labai malonus personalas!' },
  { id: 5, name: 'Rūta Navickaitė', rating: 5, text: 'Rekomenduoju visiems! Aptarnavimas nuostabus.' },
  { id: 6, name: 'Jurgita Smirnovaitė', rating: 5, text: 'Atmosfera labai jauki, jaučiausi labai komfortiškai.' },
  { id: 7, name: 'Karolis Petrauskas', rating: 4, text: 'Gerai, bet galėtų būti daugiau informacijos.' },
  { id: 8, name: 'Aistė Lukošiūtė', rating: 5, text: 'Puikus vizitas, likau labai patenkinta rezultatu.' },
  { id: 9, name: 'Martynas Balčiūnas', rating: 3, text: 'Tikėjausi kiek daugiau.' },
  { id: 10, name: 'Ingrida Kavaliauskienė', rating: 5, text: 'Nuostabi specialistė! Tikrai grįšiu dar.' },
  { id: 11, name: 'Eglė Stundžytė', rating: 4, text: 'Labai profesionali komanda ir malonus aptarnavimas.' },
  { id: 12, name: 'Mantas Kučinskas', rating: 5, text: 'Paslauga viršijo mano lūkesčius!' },
  { id: 13, name: 'Gabija Vaičiulytė', rating: 5, text: 'Tik geriausi atsiliepimai – 10/10!' },
  { id: 14, name: 'Donatas Giedraitis', rating: 2, text: 'Nelabai likau patenkintas, galėjo būti geriau.' },
  { id: 15, name: 'Viktorija Žukauskaitė', rating: 4, text: 'Maloni patirtis, bet yra kur tobulėti.' },
  { id: 16, name: 'Dovilė Mažeikaitė', rating: 5, text: 'Paslaugos lygis tikrai aukštas.' },
  { id: 17, name: 'Justinas Rimkus', rating: 3, text: 'Vidutiniška patirtis, bet nieko blogo.' },
  { id: 18, name: 'Indrė Kazlauskienė', rating: 5, text: 'Viskas tobula – nuo pradžios iki galo.' },
  { id: 19, name: 'Paulius Mickevičius', rating: 4, text: 'Greita, patogu, efektyvu.' },
  { id: 20, name: 'Lina Kairytė', rating: 5, text: 'Labai džiaugiuosi, kad pasirinkau šią vietą!' }
],

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
        <div :class="{'hidden': i < index || i >= index+4}" class="text-center w-60">
            {{-- id for count check --}}
            {{-- <p x-text="review.id"></p> --}}
            <img class="mx-auto" src="{{ asset('images/logo.svg') }}" href="/" alt="Brand Logo" width="70px">
            <h1 x-text="review.name"></h1>
            <div class="flex justify-center text-blue-800 text-xl border-t-1">
                <span x-text="star_ratings[review.rating]"></span>
            </div>
            <p x-text="review.text"></p>

        </div>
    </template>
</main>

</section>


