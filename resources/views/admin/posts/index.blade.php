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

    <a href="{{route('admin-post-create')}}">
      <button
        class="bg-blue-500 hover:bg-blue-600 text-gray-800 font-bold py-2 mt-2 ml-2 mb-3 px-4 rounded inline-flex items-center"
      >
        <i class="fas fa-plus-square"></i>
        <span>Nowy post</span>
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
            <th data-priority="4">Zdjęcie</th>
            <th data-priority="5">Autor</th>
            <th data-priority="6">Usuń</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
        <tfoot>
          <th data-priority="1">#</th>
          <th data-priority="2">Tytuł</th>
          <th data-priority="3">Treść</th>
          <th data-priority="4">Zdjęcie</th>
          <th data-priority="5">Autor</th>
          <th data-priority="6">Usuń</th>
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
