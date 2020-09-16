<!-- Topic Nav -->
<nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
  <div class="block sm:hidden">
    <a
      href="#"
      class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
      @click="open = !open"
    >
      Menu
      <i
        :class="open ? 'fa-chevron-down': 'fa-chevron-up'"
        class="fas ml-2"
      ></i>
    </a>
  </div>
  <div
    :class="open ? 'block': 'hidden'"
    class="w-full flex-grow sm:flex sm:items-center sm:w-auto"
  >
    <div
      class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2"
    >
      <div class="dropdown inline-block mr-1 mt-1">
        <button
          class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center"
        >
          <span class="mr-1">Struktura II LO</span>
          <svg
            class="fill-current h-4 w-4"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </button>
        <ul class="dropdown-menu hidden fixed text-gray-700 pt-1 mb-5">
          <li class="">
            <a
              class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >Dyrekcja</a
            >
          </li>
          <li class="">
            <a
              class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >Nauczyciele</a
            >
          </li>
          <li class="">
            <a
              class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >Pedagog/psycholog</a
            >
          </li>
          <li class="">
            <a
              class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >Administracja</a
            >
          </li>
          <li class="">
            <a
              class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >RODO</a
            >
          </li>
          <li class="">
            <a
              class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >Polisa</a
            >
          </li>
          <li class="">
            <a
              class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >Samorząd uczniowski</a
            >
          </li>
          <li class="">
            <a
              class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >Rada rodziców</a
            >
          </li>
          <li class="">
            <a
              class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >Dokumenty szkolne</a
            >
          </li>
          <li class="">
            <a
              class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >PSO zachowania</a
            >
          </li>
        </ul>
      </div>
      <div class="dropdown inline-block mr-1 mt-1">
        <button
          class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center"
        >
          <span class="mr-1">Liceum</span>
          <svg
            class="fill-current h-4 w-4"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </button>
        <ul class="dropdown-menu hidden fixed text-gray-700 pt-1 mb-5">
          <li class="">
            <a
              class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >Profile klas</a
            >
          </li>
          <li class="">
            <a
              class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >Konkursy i olimpiady</a
            >
          </li>
          <li class="">
            <a
              class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >Osiągnięcia sportowe</a
            >
          </li>
          <li class="">
            <a
              class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >Atuty</a
            >
          </li>
        </ul>
      </div>
      <div class="dropdown inline-block mr-1 mt-1">
        <button
          class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center"
        >
          <span class="mr-1">Sekcja dwujęzyczna</span>
          <svg
            class="fill-current h-4 w-4"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </button>
        <ul class="dropdown-menu hidden fixed text-gray-700 pt-1 mb-5">
          <li class="">
            <a
              class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >One</a
            >
          </li>
          <li class="">
            <a
              class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >Two</a
            >
          </li>
          <li class="">
            <a
              class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >Three is the magic number</a
            >
          </li>
        </ul>
      </div>
      <div class="dropdown inline-block mr-1 mt-1">
        <button
          class="bg-gray-300 text-gray-700 font-semibold py-2 px-4 rounded inline-flex items-center"
        >
          <span class="mr-1">Kontakt</span>
          <svg
            class="fill-current h-4 w-4"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 20 20"
          >
            <path
              d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
            />
          </svg>
        </button>
        <ul class="dropdown-menu hidden fixed text-gray-700 pt-1 mb-5">
          <li class="">
            <a
              class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >One</a
            >
          </li>
          <li class="">
            <a
              class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >Two</a
            >
          </li>
          <li class="">
            <a
              class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap"
              href="#"
              >Three is the magic number</a
            >
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
