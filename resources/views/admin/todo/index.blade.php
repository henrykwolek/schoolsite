<x-admin-master>
    @section('post-create')
    <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 p-5 md:pb-5">
      <div class="flex w-full bg-teal-lighter">
        <div class="w-full bg-white rounded shadow-lg p-8 m-4">
          <p class="block w-full text-center text-grey-darkest text-xl mb-6">
            Dodaj nowe zadanie do zrobienia
          </p>
          <form
            class="mb-4"
            action="{{route('task-create')}}"
            method="post"
          >
          @csrf
            <div class="flex flex-col mb-4">
              <label class="mb-2 font-bold text-lg text-grey-darkest" for="title"
                >Tytuł zadania</label
              >
              <input
                class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                id="title"
                name="title"
                type="text"
                placeholder="Tytuł zadania"
              />
              @error('title')
              <p class="text-red-500 text-s mt-4">
                {{ $message }}
              </p>
              @enderror
            </div>
            <div class="flex flex-col mb-6">
              <label
                class="mb-2 font-bold text-lg text-grey-darkest"
                for="body"
                >Krótki opis</label
              >
              <textarea
                placeholder="Max 500 znaków"
                class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                name="body"
                id="body"></textarea>
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
              Dodaj zadanie
            </button>
          </form>
        </div>
        
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
    @endif
    @if ($message = Session::get('danger'))
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
    <div class="mx-auto p-4 pt-0">
        <table class="shadow-lg bg-white mx-auto w-full shadow-lg">
            <tr>
              <th class="bg-blue-100 border text-left px-8 py-4">#</th>
              <th class="bg-blue-100 border text-left px-8 py-4">Tytuł</th>
              <th class="bg-blue-100 border text-left px-8 py-4">Opis</th>
              <th class="bg-blue-100 border text-left px-8 py-4">Dodano</th>
              <th class="bg-blue-100 border text-left px-8 py-4">Ukończono</th>
              <th class="bg-blue-100 border text-left px-8 py-4">Akcje</th>
            </tr>
            @foreach ($tasks as $task)
            <tr>
                <td class="border px-8 py-4">{{$task->id}}</td>
                <td class="border px-8 py-4">{{$task->title}}</td>
                <td class="border px-8 py-4" style="text-align: justify">{{$task->body}}</td>
                <td class="border px-8 py-4">{{$task->user->name}}, {{$task->created_at->diffForHumans()}}</td>
                <td class="border px-8 py-4 text-center">
                    @if ($task->is_completed == 'yes')
                     <p class="font-bold text-green-500">Tak</p>
                    @else
                        <p class="font-bold text-red-500">Nie</p>
                    @endif
                </td>
                <td class="border px-8 py-4">
                    @if ($task->is_completed == 'yes')
                        {{$task->completed_by}}, {{$task->updated_at}}
                    @else
                    <form action="{{route('task-complete', $task)}}" method="post">
                        @csrf
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" type="submit">
                            Oznacz jako ukończone
                        </button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
          </table>
    </div>
    <div class="mx-auto">
        {{$tasks->links()}}
    </div>
    </div>
    @endsection
  </x-admin-master>