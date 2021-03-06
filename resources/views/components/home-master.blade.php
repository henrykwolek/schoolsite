<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      @if (Auth::check()) Zalogowano @else Nie zalogowano @endif
    </title>
    <meta name="author" content="David Grzyb" />
    <meta name="description" content="" />

    <!-- Tailwind -->
    <link
      href="https://unpkg.com/tailwindcss/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap");

      .font-family-open-sans {
        font-family: "Open Sans", sans-serif;
      }
      .dropdown:hover .dropdown-menu {
        display: block;
      }
    </style>

    <!-- AlpineJS -->
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <!-- Font Awesome -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
      integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs="
      crossorigin="anonymous"
    ></script>
  </head>
  <body class="bg-white font-family-open-sans">
    <!-- Text Header -->
    <header class="w-full container mx-auto">
      <div class="flex flex-col items-center py-12">
        <a
          class="font-bold text-gray-800 uppercase hover:text-gray-700 text-3xl"
          href="{{route('home')}}"
        >
          II Liceum Ogólnokształcące
        </a>
        <p class="text-lg text-gray-600">
          Z oddziałami dwujęzecznymi im. Adama Mickiewicza w Gdyni
        </p>
      </div>
    </header>

    <x-home-navbar> </x-home-navbar>

    <!--Page content-->
    @yield('home-content')

    <footer class="w-full border-t bg-white pb-12">
      <div
        class="relative w-full flex items-center invisible md:visible md:pb-12"
        x-data="getCarouselData()"
      >
        <button
          class="absolute bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 ml-12"
          x-on:click="decrement()"
        >
          &#8592;
        </button>
        <template
          x-for="image in images.slice(currentIndex, currentIndex + 6)"
          :key="images.indexOf(image)"
        >
          <img class="w-1/6 hover:opacity-75" :src="image" />
        </template>
        <button
          class="absolute right-0 bg-blue-800 hover:bg-blue-700 text-white text-2xl font-bold hover:shadow rounded-full w-16 h-16 mr-12"
          x-on:click="increment()"
        >
          &#8594;
        </button>
      </div>
      <div class="w-full container mx-auto flex flex-col items-center">
        <div
          class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6"
        >
          <a href="#" class="uppercase px-3">About Us</a>
          <a href="#" class="uppercase px-3">Privacy Policy</a>
          <a href="#" class="uppercase px-3">Terms & Conditions</a>
          <a href="#" class="uppercase px-3">Contact Us</a>
        </div>
        <div class="uppercase pb-6">&copy; myblog.com</div>
      </div>
    </footer>

    <script>
      function getCarouselData() {
        return {
          currentIndex: 0,
          images: [
            "https://source.unsplash.com/collection/1346951/800x800?sig=1",
            "https://source.unsplash.com/collection/1346951/800x800?sig=2",
            "https://source.unsplash.com/collection/1346951/800x800?sig=3",
            "https://source.unsplash.com/collection/1346951/800x800?sig=4",
            "https://source.unsplash.com/collection/1346951/800x800?sig=5",
            "https://source.unsplash.com/collection/1346951/800x800?sig=6",
            "https://source.unsplash.com/collection/1346951/800x800?sig=7",
            "https://source.unsplash.com/collection/1346951/800x800?sig=8",
            "https://source.unsplash.com/collection/1346951/800x800?sig=9",
          ],
          increment() {
            this.currentIndex =
              this.currentIndex === this.images.length - 6
                ? 0
                : this.currentIndex + 1;
          },
          decrement() {
            this.currentIndex =
              this.currentIndex === this.images.length - 6
                ? 0
                : this.currentIndex - 1;
          },
        };
      }
    </script>
  </body>
</html>
