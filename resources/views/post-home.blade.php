<x-home-master>
    @section('home-content')

    @if ($message = Session::get('danger'))
    <div class="container mx-auto py-4">
        <div role="alert">
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
              Brak dostępu
            </div>
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
              <p>Strona lub adres do którego próbujesz się dostać jest niedostępna lub została przeniesiona.</p>
            </div>
          </div>
    </div>
    @endif
    
    <div class="container mx-auto flex flex-wrap py-6">
        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
            <article class="flex w-full flex-col shadow my-4">
                <!-- Article Image -->
                @if ($post->post_image != NULL)
                <a href="{{route('post-home', $post)}}" class="hover:opacity-75">
                  <img
                    src="{{asset($post->post_image)}}"
                  />
                </a>
                @endif
                <div class="bg-white flex flex-col justify-start p-6">
                  <a href="{{route('post-home', $post)}}" class="text-3xl font-bold hover:text-gray-700 pb-4"
                    >{{$post->title}}</a
                  >
                  <p href="{{route('post-home', $post)}}" class="text-sm pb-3">
                    Opublikowano przez
                    <a href="{{route('post-home', $post)}}" class="font-semibold hover:text-gray-800"
                      >{{$post->user->name}}</a
                    >, {{$post->created_at->diffForHumans()}}
                  </p>
                  <a href="{{route('post-home', $post)}}" class="pb-6"
                    >{{$post->body}}</a
                  >
                </div>
              </article>
        </section>
  
        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">
          <x-aside-historia-szkoly></x-aside-historia-szkoly>
  
          <x-aside-menu-dodatkowe></x-aside-menu-dodatkowe>
  
          <x-aside-photo-gallery></x-aside-photo-gallery>
        </aside>
      </div>
    @endsection
</x-home-master>