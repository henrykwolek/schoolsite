<x-admin-master>
  @section('user-index')
  <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5 p-4">
    <div class="flex flex-wrap overflow-hidden">
      @foreach ($users as $user)
      <div class="l:w-1/4 overflow-hidden">
        @if (Auth::user()->id == $user->id)
        <div class="max-w-sm rounded overflow-hidden shadow">
          @endif
          <img
            class="w-full"
            src="https://cdn.pixabay.com/photo/2018/04/18/18/56/user-3331256__340.png"
            alt="Sunset in the mountains"
          />
          <div class="px-6 py-4">
            <div class="font-bold text-xl mb-2">{{$user->name}}</div>
            <p class="text-gray-700 text-base">
              {{$user->email}}
            </p>
          </div>
          <div class="px-6 pt-4 pb-2">
            <span
              class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
              >Dołączono: {{$user->created_at->diffForHumans()}}</span
            >
            <span
              class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2"
            >
              @if ($user->is_admin == 1) Administrator @endif
            </span>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  @endsection
</x-admin-master>
