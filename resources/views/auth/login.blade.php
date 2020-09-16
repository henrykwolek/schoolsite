@extends('layouts.app') @section('content')
<div class="container mx-auto">
  <div class="flex flex-wrap justify-center">
    <div class="w-full max-w-sm">
      <div
        class="flex flex-col break-words bg-white border-2 rounded shadow-md"
      >
        <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
          {{ __("Redakcja serwisu") }}
        </div>

        <form class="w-full p-6" method="POST" action="{{ route('login') }}">
          @csrf

          <div class="flex flex-wrap mb-6">
            <label
              for="email"
              class="block text-gray-700 text-sm font-bold mb-2"
            >
              {{ __("Adres email") }}:
            </label>

            <input
              id="email"
              type="email"
              class="form-input w-full @error('email') border-red-500 @enderror"
              name="email"
              value="{{ old('email') }}"
              required
              autocomplete="email"
              autofocus
            />

            @error('email')
            <p class="text-red-500 text-s mt-4">
              {{ $message }}
            </p>
            @enderror
          </div>

          <div class="flex flex-wrap mb-6">
            <label
              for="password"
              class="block text-gray-700 text-sm font-bold mb-2"
            >
              {{ __("Hasło") }}:
            </label>

            <input
              id="password"
              type="password"
              class="form-input w-full @error('password') border-red-500 @enderror"
              name="password"
              required
            />

            @error('password')
            <p class="text-red-500 text-s mt-4">
              {{ $message }}
            </p>
            @enderror
          </div>

          <div class="flex mb-6">
            <label
              class="inline-flex items-center text-sm text-gray-700"
              for="remember"
            >
              <input type="checkbox" name="remember" id="remember"
              class="form-checkbox" {{ old("remember") ? "checked" : "" }}>
              <span class="ml-2">{{ __("Pamiętaj mnie") }}</span>
            </label>
          </div>

          <div class="flex flex-wrap items-center">
            <button
              type="submit"
              class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            >
              {{ __("Zaloguj się") }}
            </button>

            @if (Route::has('password.request'))
            <a
              class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline ml-auto"
              href="{{ route('password.request') }}"
            >
              {{ __("Zapomniane hasło?") }}
            </a>
            @endif
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
