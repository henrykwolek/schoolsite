<x-admin-master>
  @section('post-create')
  <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 p-5 md:pb-5">
    <div class="flex w-full bg-teal-lighter">
      <div class="w-full bg-white rounded shadow-lg p-8 m-4">
        <div
          class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 mb-3 shadow-md"
          role="alert"
        >
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
              <p class="font-bold">Edytowanie istniejącego ogłoszenia</p>
              <p class="text-sm">
                Prosimy, aby wszystkie zmiany były przemyślane i zamierzone.
              </p>
            </div>
          </div>
        </div>
        <form
          class="mb-4"
          action="{{route('admin-post-store')}}"
          method="post"
          enctype="multipart/form-data"
        >
          @csrf
          <div class="flex flex-col mb-4">
            <label class="mb-2 font-bold text-lg text-grey-darkest" for="title"
              >Nowy tytuł</label
            >
            <input
              class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 shadow rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              id="title"
              name="title"
              value="{{$post->title}}"
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
              >Nowe zdjęcie</label
            >
            <input
              class="appearance-none block w-full shadow bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
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
          <div class="max-w-sm rounded overflow-hidden shadow-lg mb-2">
            <a
              target="blank"
              href="{{asset($post->post_image)}}"
              class="hover:opacity-75"
              ><img class="w-full" src="{{asset($post->post_image)}}" alt=""
            /></a>
            <div class="px-4 py-2">
              <div class="font-bold text-xl mb-2">Obecne zdjęcie</div>
            </div>
          </div>
          <div class="flex flex-col mb-6">
            <label class="mb-2 font-bold text-lg text-grey-darkest" for="body"
              >Treść</label
            >
            <textarea
              placeholder="Opis"
              class="appearance-none shadow block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
              name="body"
              id="body"
            >{{$post->body}}</textarea>
            @error('body')
            <p class="text-red-500 text-s mt-4">
              {{ $message }}
            </p>
            @enderror
          </div>
          <button
            class="bg-blue-500 hover:bg-blue-700 shadow text-white content-center font-bold py-2 mx-auto px-4 rounded"
            type="submit"
          >
            Zapisz zmiany
          </button>
        </form>
        <br>
        <p class="text-lg">Usuwanie ogłoszenia</p>
        <hr class="mb-2">
        @if ($post->user->id == Auth::user()->id)
        <form action="{{route('admin-post-destroy', $post)}}" method="post">
          @csrf 
          @method('DELETE')
          <button
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
            type="submit"
          >
            Usuń post
          </button>
        </form>
        <p class="text-red-500">Uwaga! Ta czynnośc jest nieodwracalna.</p>
      @endif     
      </div>
    </div>
  </div>
  @endsection
</x-admin-master>
