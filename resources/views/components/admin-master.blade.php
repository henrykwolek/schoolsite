<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Tailwind Admin Starter Template : Tailwind Toolbox</title>
    <meta name="author" content="name" />
    <meta name="description" content="description here" />
    <meta name="keywords" content="keywords,here" />

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
    />
    <link
      href="https://unpkg.com/tailwindcss/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <!--Regular Datatables CSS-->
    <link
      href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"
      rel="stylesheet"
    />
    <!--Responsive Extension Datatables CSS-->
    <link
      href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css"
      rel="stylesheet"
    />
    <!--Replace with your tailwind.css once created-->
    <link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet" />
    <!--Totally optional :) -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"
      integrity="sha256-xKeoJ50pzbUGkpQxDYHD7o7hxe0LaOGeguUidbq6vis="
      crossorigin="anonymous"
    ></script>
  </head>

  <body class="bg-gray-900 font-sans leading-normal tracking-normal mt-12">
    <!--Nav-->
    <nav
      class="bg-gray-900 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0"
    >
      <div class="flex flex-wrap items-center">
        <div
          class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white"
        >
          <a href="{{route('admin-index')}}">
            <span class="text-xl pl-2">Zarządzanie</span>
          </a>
        </div>

        <div
          class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2"
        >
          <div class="mx-auto text-xl">
            Panel redakcji
          </div>
        </div>

        <div
          class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end"
        >
          <ul
            class="list-reset flex justify-between flex-1 md:flex-none items-center"
          >
            <li class="flex-1 md:flex-none md:mr-3">
              <a
                class="inline-block py-2 px-4 text-white no-underline"
                href="{{route('home')}}"
                >Powrót do strony głównej</a
              >
            </li>
            <li class="flex-1 md:flex-none md:mr-3">
              <div class="relative inline-block">
                <button
                  onclick="toggleDD('myDropdown')"
                  class="drop-button text-white focus:outline-none"
                >
                  <span class="pr-2"><i class="em em-robot_face"></i></span>
                  Witaj, {{Auth::user()->name}}
                </button>
                <div
                  id="myDropdown"
                  class="dropdownlist absolute bg-gray-900 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible"
                >
                  <a
                    href="{{route('user-show-profile', Auth::user())}}"
                    class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"
                    ><i class="fa fa-user fa-fw"></i> Profil</a
                  >
                  <div class="border border-gray-800"></div>
                  <a
                    href="{{route('user.logout')}}"
                    class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"
                    ><i class="fas fa-sign-out-alt fa-fw"></i> Wyloguj się</a
                  >
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <x-admin-sidebar-menu></x-admin-sidebar-menu>
    @yield('admin-main-content') @yield('admin-posts-layout')
    @yield('post-create') @yield('user-index')
    <hr />
    <script>
      /*Toggle dropdown list*/
      function toggleDD(myDropMenu) {
        document.getElementById(myDropMenu).classList.toggle("invisible");
      }
      /*Filter dropdown options*/
      function filterDD(myDropMenu, myDropMenuSearch) {
        var input, filter, ul, li, a, i;
        input = document.getElementById(myDropMenuSearch);
        filter = input.value.toUpperCase();
        div = document.getElementById(myDropMenu);
        a = div.getElementsByTagName("a");
        for (i = 0; i < a.length; i++) {
          if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
          } else {
            a[i].style.display = "none";
          }
        }
      }
      // Close the dropdown menu if the user clicks outside of it
      window.onclick = function (event) {
        if (
          !event.target.matches(".drop-button") &&
          !event.target.matches(".drop-search")
        ) {
          var dropdowns = document.getElementsByClassName("dropdownlist");
          for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (!openDropdown.classList.contains("invisible")) {
              openDropdown.classList.add("invisible");
            }
          }
        }
      };
    </script>
  </body>
</html>
