<x-admin-master>
  @section('post-create')
  <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 p-5 md:pb-5">
    <div class="flex w-full bg-teal-lighter">
      <div class="w-full bg-white rounded shadow-lg p-8 m-4">
        <p class="block w-full text-center text-grey-darkest text-xl mb-6">
          Nowy post
        </p>
        <form
          class="mb-4"
          action="{{route('admin-post-store')}}"
          method="post"
          enctype="multipart/form-data"
        >
          @csrf
          <div class="flex flex-col mb-4">
            <label class="mb-2 font-bold text-lg text-grey-darkest" for="title"
              >Tytuł</label
            >
            <input
              class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="title"
              name="title"
              type="text"
              placeholder="Tytuł ogłoszenia"
            />
            @error('title')
            <p class="text-red-500 text-s mt-4">
              {{ $message }}
            </p>
            @enderror
          </div>
          <div class="flex flex-col mb-4">
            <label
              class="mb-2 font-bold text-lg text-grey-darkest"
              for="post_image"
              >Zdjęcie</label
            >
            <input
              class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="post_image"
              name="post_image"
              type="file"
            />
            @error('post_image')
            <p class="text-red-500 text-s mt-4">
              {{ $message }}
            </p>
            @enderror
          </div>
          <div class="flex flex-col mb-4">
            <label
              class="mb-2 font-bold text-lg text-grey-darkest"
              for="category"
              >Kategoria</label
            >
            <select
              class="block appearance-none w-full bg-gray-100 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="category"
              name="category"
            >
              <option value="post">Post (strona główna)</option>
              <option value="inne">Inna kategoria</option>
            </select>
            @error('password')
            <p class="text-red-500 text-s mt-4">
              {{ $category }}
            </p>
            @enderror
          </div>
          <div class="flex flex-col mb-6">
            <label class="mb-2 font-bold text-lg text-grey-darkest" for="body"
              >Treść</label
            >
            <textarea
              placeholder="Opis"
              class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              name="body"
              id="body"
            ></textarea>
            @error('body')
            <p class="text-red-500 text-s mt-4">
              {{ $message }}
            </p>
            @enderror
          </div>
          <button
            class="bg-blue-500 hover:bg-blue-700 text-white content-center font-bold py-2 mx-auto px-4 rounded"
            type="submit"
          >
            Zapisz post
          </button>
        </form>
      </div>
    </div>
  </div>
  @endsection
</x-admin-master>
