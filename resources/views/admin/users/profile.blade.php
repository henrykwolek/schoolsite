<x-admin-master>
  @section('post-create')
  <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 p-5 md:pb-5">
    <div class="flex w-full bg-teal-lighter">
      <div class="w-full bg-white rounded shadow-lg p-8 m-4">
        <div
          class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 mb-3 shadow-md"
          role="alert"
        >
          <style>
            /* RED BORDER ON INVALID INPUT */
            .check input:invalid {
              border-color: red;
            }

            /* FLOATING LABEL */
            .label-floating input:not(:placeholder-shown),
            .label-floating textarea:not(:placeholder-shown) {
              padding-top: 1.4rem;
            }
            .label-floating input:not(:placeholder-shown) ~ label,
            .label-floating textarea:not(:placeholder-shown) ~ label {
              font-size: 0.8rem;
              transition: all 0.2s ease-in-out;
              color: #1f9d55;
              opacity: 1;
            }
          </style>
          <div class="flex">
            <div class="py-1">
              <svg
                class="fill-current h-6 w-6 text-teal-500 mr-4"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"
                />
              </svg>
            </div>
            <div>
              <p class="font-bold">Edycja profilu</p>
              <p class="text-sm">
                Tu możesz zmienić swoje informacje
              </p>
            </div>
          </div>
        </div>

        <div class="flex flex-wrap overflow-hidden">
          <div
            class="w-full overflow-hidden sm:w-full md:w-full lg:w-1/2 xl:w-1/2"
          >
            <form
              method="post"
              action="{{route('user-update-profile', Auth::user())}}"
              class="w-full mx-auto bg-white pt-2 p-4 text-gray-700"
            >
              @csrf @method('PUT')
              <h2 class="w-full my-2 text-3xl font-bold leading-tight mt-0">
                Podstawowe informacje
              </h2>
              <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/2 px-3 mb-0 md:mb-0">
                  <label
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-first-name"
                  >
                    Imię i nazwisko
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-green-500"
                    id="name"
                    name="name"
                    type="text"
                    value="{{$user->name}}"
                  />
                </div>
                <div class="w-full md:w-1/2 px-3">
                  <label
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-last-name"
                  >
                    Adres email
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-500"
                    id="email"
                    name="email"
                    type="email"
                    value="{{$user->email}}"
                  />
                </div>
              </div>
              <div class="flex flex-wrap -mx-3 mb-0">
                <div class="w-full px-3 mb-0 md:mb-0">
                  <label
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-first-name"
                  >
                    Potwierdzenie • Hasło
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-green-500"
                    id="current_password"
                    name="current_password"
                    type="password"
                    placeholder="Hasło dla potwierdzenia"
                  />
                </div>

                @error('current_password')
                <p class="text-red-500 text-s mx-4 my-2">
                  {{ $message }}
                </p>
                @enderror
              </div>
              <button
                class="shadow bg-green-500 hover:bg-green-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                type="submit"
              >
                Zapisz miany
              </button>
            </form>
          </div>

          <div
            class="w-full overflow-hidden sm:w-full md:w-full lg:w-1/2 xl:w-1/2"
          >
            <form
              action="{{route('user-change-password', Auth::user())}}"
              class="w-full mt-0 mx-auto bg-white pt-0 p-4 text-gray-700"
              method="post"
            >
              @csrf @method('PUT')
              <h2 class="w-full my-2 text-3xl font-bold leading-tight mb-2">
                Zmiana hasła
              </h2>
              <div class="flex flex-wrap -mx-3 mb-2">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-first-name"
                  >
                    Nowe hasło
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-green-500"
                    id="new_password"
                    name="new_password"
                    type="password"
                    placeholder="Nowe hasło"
                  />
                </div>
                <div class="w-full md:w-1/2 px-3">
                  <label
                    class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                    for="grid-last-name"
                  >
                    Powtórz nowe hasło
                  </label>
                  <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-green-500"
                    id="new_confirm_password"
                    name="new_confirm_password"
                    type="password"
                    placeholder="Powtórz nowe hasło"
                  />
                </div>
                @error('new_password')
                <p class="text-red-500 text-s mx-4 my-2">
                  {{ $message }}
                </p>
                @enderror
              </div>
              <div class="w-full md:mb-0">
                <label
                  class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                  for="grid-first-name"
                >
                  Obecne hasło
                </label>
                <input
                  class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:border-green-500"
                  id="current_password_change"
                  name="current_password_change"
                  type="password"
                  placeholder="Obecne hasło"
                />
              </div>
              @error('current_password_change')
              <p class="text-red-500 text-s mx-4 my-2">
                {{ $message }}
              </p>
              @enderror
              <button
                class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                type="submit"
              >
                Zmień hasło
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
</x-admin-master>
