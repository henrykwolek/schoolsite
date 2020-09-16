<x-admin-master>
  @section('admin-main-content')
  <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
    <head>
      <style>
        /*Overrides for Tailwind CSS */

        /*Form fields*/
        .dataTables_wrapper select,
        .dataTables_wrapper .dataTables_filter input {
          color: #4a5568; /*text-gray-700*/
          padding-left: 1rem; /*pl-4*/
          padding-right: 1rem; /*pl-4*/
          padding-top: 0.5rem; /*pl-2*/
          padding-bottom: 0.5rem; /*pl-2*/
          line-height: 1.25; /*leading-tight*/
          border-width: 2px; /*border-2*/
          border-radius: 0.25rem;
          border-color: #edf2f7; /*border-gray-200*/
          background-color: #edf2f7; /*bg-gray-200*/
        }

        /*Row Hover*/
        table.dataTable.hover tbody tr:hover,
        table.dataTable.display tbody tr:hover {
          background-color: #ebf4ff; /*bg-indigo-100*/
        }

        /*Pagination Buttons*/
        .dataTables_wrapper .dataTables_paginate .paginate_button {
          font-weight: 700; /*font-bold*/
          border-radius: 0.25rem; /*rounded*/
          border: 1px solid transparent; /*border border-transparent*/
        }

        /*Pagination Buttons - Current selected */
        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
          color: #fff !important; /*text-white*/
          box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1),
            0 1px 2px 0 rgba(0, 0, 0, 0.06); /*shadow*/
          font-weight: 700; /*font-bold*/
          border-radius: 0.25rem; /*rounded*/
          background: #667eea !important; /*bg-indigo-500*/
          border: 1px solid transparent; /*border border-transparent*/
        }

        /*Pagination Buttons - Hover */
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
          color: #fff !important; /*text-white*/
          box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1),
            0 1px 2px 0 rgba(0, 0, 0, 0.06); /*shadow*/
          font-weight: 700; /*font-bold*/
          border-radius: 0.25rem; /*rounded*/
          background: #667eea !important; /*bg-indigo-500*/
          border: 1px solid transparent; /*border border-transparent*/
        }

        /*Add padding to bottom border */
        table.dataTable.no-footer {
          border-bottom: 1px solid #e2e8f0; /*border-b-1 border-gray-300*/
          margin-top: 0.75em;
          margin-bottom: 0.75em;
        }

        /*Change colour of responsive icon*/
        table.dataTable.dtr-inline.collapsed
          > tbody
          > tr
          > td:first-child:before,
        table.dataTable.dtr-inline.collapsed
          > tbody
          > tr
          > th:first-child:before {
          background-color: #667eea !important; /*bg-indigo-500*/
        }
      </style>
    </head>

    <!--Title-->
    <h1
      class="flex items-center font-sans font-bold break-normal text-indigo-500 ml-2 mt-3 text-xl md:text-2xl"
    >
      Wszystkie posty
    </h1>

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
    @if ($message = Session::get('warning'))
    <div class="p-5">
      <div role="alert">
        <div class="bg-yellow-500 text-white font-bold rounded-t px-4 py-2">
          Powiadomienie
        </div>
        <div
          class="border border-t-0 border-yellow-400 rounded-b bg-yellow-100 px-4 py-3 text-black-700"
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

    <a href="{{route('admin-post-create')}}">
      <button
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold ml-2 mt-2 mb-2 py-2 px-4 rounded"
      >
        Nowy post
      </button>
    </a>

    <!--Card-->
    <div id="recipients" class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
      <table
        id="example"
        class="stripe hover"
        style="width: 100%; padding-top: 1em; padding-bottom: 1em;"
      >
        <thead>
          <tr>
            <th data-priority="1">#</th>
            <th data-priority="2">Tytuł</th>
            <th data-priority="3">Treść</th>
            <th data-priority="4">Utworzono</th>
            <th data-priority="5">Autor</th>
            <th data-priority="6">Akcje</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
          <tr>
            <td class="text-center">{{$post->id}}</td>
            <td class="text-center">
              <a
                @if (Auth::user()->id == $post->user->id)
                  href="{{route('admin-post-edit', $post)}}"
                @else
                  href="{{route('admin-post-detail', $post)}}"
                @endif
                class="no-underline hover:underline text-blue-500"
                >{{$post->title}}</a
              >
            </td>
            <td class="text-center">
              {{Str::limit($post->body, '150', '...')}}
            </td>
            <td class="text-center">
              {{$post->created_at->diffForHumans()}}
            </td>
            <td class="text-center">{{$post->user->name}}</td>
            <td class="text-center">
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
              @else
                <p class="text-red-500 font-bold">Brak dostępnych akcji</p>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
          <th data-priority="1">#</th>
          <th data-priority="2">Tytuł</th>
          <th data-priority="3">Treść</th>
          <th data-priority="4">Utworzono</th>
          <th data-priority="5">Autor</th>
          <th data-priority="6">Akcje</th>
        </tfoot>
      </table>
    </div>
    <!--/Card-->

    <!-- jQuery -->
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-3.4.1.min.js"
    ></script>

    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script>
      $(document).ready(function () {
        var table = $("#example")
          .DataTable({
            responsive: true,
          })
          .columns.adjust()
          .responsive.recalc();
      });
    </script>
  </div>
  @endsection
</x-admin-master>
