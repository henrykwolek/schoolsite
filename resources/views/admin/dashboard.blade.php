<x-admin-master>
  @section('admin-main-content')
  <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
    <div class="bg-blue-800 p-2 shadow text-xl text-white">
      <h3 class="font-bold pl-2">Analiza</h3>
    </div>
    @if ($message = Session::get('success'))
    <div class="p-5">
      <div role="alert">
        <div class="bg-green-500 text-white font-bold rounded-t px-4 py-2">
          Powiadomienie
        </div>
        <div
          class="border border-t-0 border-green-400 rounded-b bg-green-100 px-4 py-3 text-black-700"
        >
          <p>{{ $message }}</p>
        </div>
      </div>
    </div>
    @endif @if ($message = Session::get('danger'))
    <div class="p-5">
      <div role="alert">
        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
          Powiadomienie
        </div>
        <div
          class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-black-700"
        >
          <p>{{ $message }}</p>
        </div>
      </div>
    </div>
    @endif

    <div class="flex flex-wrap">
      <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <!--Metric Card-->
        <div
          class="bg-blue-100 border-b-4 border-blue-500 rounded-lg shadow-lg p-5"
        >
          <div class="flex flex-row items-center">
            <div class="flex-shrink pr-4">
              <div class="rounded-full p-5 bg-blue-600">
                <i class="fas fa-server fa-2x fa-inverse"></i>
              </div>
            </div>
            <div class="flex-1 text-right md:text-center">
              <h5 class="font-bold uppercase text-gray-600">
                Łączna liczba postów
              </h5>
              <h3 class="font-bold text-3xl">
                {{ App\Post::count() }}
              </h3>
            </div>
          </div>
        </div>
        <!--/Metric Card-->
      </div>

      <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <!--Metric Card-->
        <div
          class="bg-orange-100 border-b-4 border-orange-500 rounded-lg shadow-lg p-5"
        >
          <div class="flex flex-row items-center">
            <div class="flex-shrink pr-4">
              <div class="rounded-full p-5 bg-orange-600">
                <i class="fas fa-users fa-2x fa-inverse"></i>
              </div>
            </div>
            <div class="flex-1 text-right md:text-center">
              <h5 class="font-bold uppercase text-gray-600">
                Wszyscy użytkownicy
              </h5>
              <h3 class="font-bold text-3xl">
                {{ App\User::count() }}
                <span class="text-orange-500"
                  ><i class="fas fa-layer-group"></i
                ></span>
              </h3>
            </div>
          </div>
        </div>
        <!--/Metric Card-->
      </div>

      <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <!--Metric Card-->
        <div
          class="bg-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-lg p-5"
        >
          <div class="flex flex-row items-center">
            <div class="flex-shrink pr-4">
              <div class="rounded-full p-5 bg-indigo-600">
                <i class="fas fa-tasks fa-2x fa-inverse"></i>
              </div>
            </div>
            <div class="flex-1 text-right md:text-center">
              <h5 class="font-bold uppercase text-gray-600">
                Ukończone zadania
              </h5>
              <h3 class="font-bold text-3xl">
                {{App\Task::where('is_completed', 'yes')->count()}}
              </h3>
            </div>
          </div>
        </div>
        <!--/Metric Card-->
      </div>

      <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <!--Metric Card-->
        <div
          class="bg-green-100 border-b-4 border-green-600 rounded-lg shadow-lg p-5"
        >
          <div class="flex flex-row items-center">
            <div class="flex-shrink pr-4">
              <div class="rounded-full p-5 bg-green-600">
                <i class="fa fa-mail-bulk fa-2x fa-inverse"></i>
              </div>
            </div>
            <div class="flex-1 text-right md:text-center">
              <h5 class="font-bold uppercase text-gray-600">
                Posty dodane dzisiaj
              </h5>
              <h3 class="font-bold text-3xl">
                {{App\Post::whereDate('created_at', Carbon\Carbon::today())->count()}}
                <span class="text-green-500"
                  ><i class="fas fa-caret-up"></i
                ></span>
              </h3>
            </div>
          </div>
        </div>
        <!--/Metric Card-->
      </div>

      <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <!--Metric Card-->
        <div
          class="bg-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-lg p-5"
        >
          <div class="flex flex-row items-center">
            <div class="flex-shrink pr-4">
              <div class="rounded-full p-5 bg-yellow-600">
                <i class="fas fa-user-plus fa-2x fa-inverse"></i>
              </div>
            </div>
            <div class="flex-1 text-right md:text-center">
              <h5 class="font-bold uppercase text-gray-600">
                Nowi użytkownicy (ostatni tydzień)
              </h5>
              <h3 class="font-bold text-3xl">
                {{App\User::whereBetween('created_at', [Carbon\Carbon::now()->subWeek(), Carbon\Carbon::now()])->count()}}
                <span class="text-yellow-600"
                  ><i class="fas fa-caret-up"></i
                ></span>
              </h3>
            </div>
          </div>
        </div>
        <!--/Metric Card-->
      </div>
      <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <!--Metric Card-->
        <div
          class="bg-red-100 border-b-4 border-red-500 rounded-lg shadow-lg p-5"
        >
          <div class="flex flex-row items-center">
            <div class="flex-shrink pr-4">
              <div class="rounded-full p-5 bg-red-600">
                <i class="fas fa-exclamation-circle fa-2x fa-inverse"></i>
              </div>
            </div>
            <div class="flex-1 text-right md:text-center">
              <h5 class="font-bold uppercase text-gray-600">
                Zadania do zrobienia
              </h5>
              <h3 class="font-bold text-3xl">
                {{App\Task::where('is_completed', NULL)->count()}}
                <span class="text-red-500"
                  ><i class="fas fa-caret-up"></i
                ></span>
              </h3>
            </div>
          </div>
        </div>
        <!--/Metric Card-->
      </div>
    </div>
    <hr />
    <div class="flex flex-row flex-wrap flex-grow mt-2">
      <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <!--Graph Card-->
        <div class="bg-white border-transparent rounded-lg shadow-lg">
          <div
            class="bg-gray-400 uppercase text-gray-800 border-b-2 border-gray-500 rounded-tl-lg rounded-tr-lg p-2"
          >
            <h5 class="font-bold uppercase text-gray-600">
              Najnowsze zadania do zrobienia
            </h5>
          </div>
          <div class="p-5">
            <table class="table-auto">
              <tbody>
                @foreach ($tasks as $task)
                <tr>
                  <td class="border px-4 py-2">{{$task->body}}</td>
                  <td class="border px-4 py-2">
                    {{$task->created_at->diffForHumans()}}
                  </td>
                  <td class="border px-4 py-2">{{$task->is_completed}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!--/Graph Card-->
      </div>

      <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <!--Graph Card-->
        <div class="bg-white border-transparent rounded-lg shadow-lg">
          <div
            class="bg-gray-400 border-b-2 border-gray-500 rounded-tl-lg rounded-tr-lg p-2"
          >
            <h5 class="font-bold uppercase text-gray-600">Najnowsze posty</h5>
          </div>
          <div class="p-5">
            <table class="table-auto">
              <tbody>
                @foreach ($posts as $post)
                <tr>
                  <td class="border px-4 py-2">
                    <a
                      class="no-underline hover:underline text-blue-500"
                      href="{{route('admin-post-detail', $post)}}"
                    >
                      {{$post->title}}
                    </a>
                  </td>
                  <td class="border px-4 py-2">
                    {{Str::limit($post->body, '50', '....')}}
                  </td>
                  <td class="border px-4 py-2">
                    {{$post->created_at->diffForHumans()}}
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!--/Graph Card-->
      </div>

      <div class="w-full md:w-1/2 xl:w-1/3 p-3">
        <!--Graph Card-->
        <div class="bg-white border-transparent rounded-lg shadow-lg">
          <div
            class="bg-gray-400 border-b-2 border-gray-500 rounded-tl-lg rounded-tr-lg p-2"
          >
            <h5 class="font-bold uppercase text-gray-600">Nowi użytkownicy</h5>
          </div>
          <div class="p-5">
            <table class="w-full">
              <tbody>
                @foreach ($users as $user)
                <tr>
                  <td class="border px-4 py-2">{{$user->id}}</td>
                  <td class="border px-4 py-2">{{$user->name}}</td>
                  <td class="border px-4 py-2">
                    {{$user->created_at->diffForHumans()}}
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <!--/Graph Card-->
      </div>
    </div>
  </div>
  @endsection
</x-admin-master>
