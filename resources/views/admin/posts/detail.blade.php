<x-admin-master>
  @section('post-create')
  <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 p-5 md:pb-5">
    <div class="flex w-full bg-teal-lighter">
      <div class="w-full bg-white rounded shadow-lg p-8 m-4">
        @if (Auth::user()->id == $post->user->id)
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
              <p class="font-bold">Widok szczegółowy ogłoszenia</p>
              <p class="text-sm">
                Teraz oglądasz ten post w widoku szczegółowym. Możesz go
                edytować i usunąć, ponieważ jesteś jego autorem.
              </p>
            </div>
          </div>
        </div>
        @else
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
              <p class="font-bold">Brak możliwości edycji</p>
              <p class="text-sm">
                Wygląda na to, że nie jesteś autorem tego postu. Możesz go
                jedynie oglądać w widoku szczegółowym.
              </p>
            </div>
          </div>
        </div>
        @endif

        <div class="max-w-sm w-full lg:max-w-full lg:flex">
          <img
            src="{{asset($post->post_image)}}"
            style="max-height: 300px;"
            class="lg:h-auto flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
            title="Woman holding a mug"
          />
          <div
            class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
          >
            <div class="mb-8">
              <div class="text-gray-900 font-bold text-3xl mb-2">
                {{$post->title}}
              </div>
              <p class="text-gray-700" style="text-align: justify;">
                {{$post->body}}
              </p>
            </div>
            <div class="flex items-center">
              <div class="text-l">
                <p class="text-gray-900 leading-none">{{$post->user->name}}</p>
                <p class="text-gray-600">{{$post->created_at}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
</x-admin-master>
