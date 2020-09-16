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
          <a href="#">
            <span class="text-xl pl-2">Zarządzanie</span>
          </a>
        </div>

        <div
          class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2"
        >
        <div class="mx-auto text-xl">
          Panel administratora
        </div>
        </div>
        

        <div
          class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end"
        >
          <ul
            class="list-reset flex justify-between flex-1 md:flex-none items-center"
          >
            <li class="flex-1 md:flex-none md:mr-3">
              <a class="inline-block py-2 px-4 text-white no-underline" href="#"
                >Active</a
              >
            </li>
            <li class="flex-1 md:flex-none md:mr-3">
              <a
                class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4"
                href="#"
                >link</a
              >
            </li>
            <li class="flex-1 md:flex-none md:mr-3">
              <div class="relative inline-block">
                <button
                  onclick="toggleDD('myDropdown')"
                  class="drop-button text-white focus:outline-none"
                >
                  <span class="pr-2"><i class="em em-robot_face"></i></span> Witaj,
                  User
                  <svg
                    class="h-3 fill-current inline"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
                    />
                  </svg>
                </button>
                <div
                  id="myDropdown"
                  class="dropdownlist absolute bg-gray-900 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible"
                >
                  
                  <a
                    href="#"
                    class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"
                    ><i class="fa fa-user fa-fw"></i> Profile</a
                  >
                  <a
                    href="#"
                    class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"
                    ><i class="fa fa-cog fa-fw"></i> Settings</a
                  >
                  <div class="border border-gray-800"></div>
                  <a
                    href="#"
                    class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"
                    ><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a
                  >
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="flex flex-col md:flex-row">
      <div
        class="bg-gray-900 shadow-lg h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48"
      >
        <div
          class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between"
        >
          <ul
            class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left"
          >
            <li class="mr-3 flex-1">
              <a
                href="#"
                class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-red-500"
              >
                <i class="fas fa-folder-plus pr-0 md:pr-3"></i
                ><span
                  class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block"
                  >Posty</span
                >
              </a>
            </li>
            <li class="mr-3 flex-1">
              <a
                href="#"
                class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-yellow-500"
              >
                <i class="fas fa-users pr-0 md:pr-3"></i
                ><span
                  class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block"
                  >Użytkownicy</span
                >
              </a>
            </li>
            <li class="mr-3 flex-1">
              <a
                href="#"
                class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-blue-500"
              >
                <i class="fas fa-clipboard-check pr-0 md:pr-3"></i
                ><span
                  class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block"
                  >Do zrobienia</span
                >
              </a>
            </li>
            <li class="mr-3 flex-1">
              <a
                href="#"
                class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-800 hover:border-green-500"
              >
                <i class="fas fa-exclamation-circle pr-0 md:pr-3"></i
                ><span
                  class="pb-1 md:pb-0 text-xs md:text-base text-gray-600 md:text-gray-400 block md:inline-block"
                  >Problemy</span
                >
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
        <div class="bg-blue-800 p-2 shadow text-xl text-white">
          <h3 class="font-bold pl-2">Analiza</h3>
        </div>

        <div class="flex flex-wrap">
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
                    Łączna liczba postów
                  </h5>
                  <h3 class="font-bold text-3xl">
                    86
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
                    249
                    <span class="text-orange-500"
                      ><i class="fas fa-exchange-alt"></i
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
                    Nowi użytkownicy
                  </h5>
                  <h3 class="font-bold text-3xl">
                    2
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
                    Działanie strony
                  </h5>
                  <h3 class="font-bold text-3xl">152 days</h3>
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
                    Zadania do zrobienia
                  </h5>
                  <h3 class="font-bold text-3xl">7 zadań</h3>
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
                  <h5 class="font-bold uppercase text-gray-600">Problemy</h5>
                  <h3 class="font-bold text-3xl">
                    3
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
        <hr>
        <div class="flex flex-row flex-wrap flex-grow mt-2">

          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Graph Card-->
              <div class="bg-white border-transparent rounded-lg shadow-lg">
                  <div class="bg-gray-400 uppercase text-gray-800 border-b-2 border-gray-500 rounded-tl-lg rounded-tr-lg p-2">
                      <h5 class="font-bold uppercase text-gray-600">Najnowsze zadania do zrobienia</h5>
                  </div>
                  <div class="p-5">
                    <table class="table-auto">
                      <tbody>
                        <tr>
                          <td class="border px-4 py-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                          <td class="border px-4 py-2">Adam</td>
                          <td class="border px-4 py-2">858</td>
                        </tr>
                        <tr class="bg-gray-100">
                          <td class="border px-4 py-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                          <td class="border px-4 py-2">Adam</td>
                          <td class="border px-4 py-2">112</td>
                        </tr>
                        <tr>
                          <td class="border px-4 py-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                          <td class="border px-4 py-2">Chris</td>
                          <td class="border px-4 py-2">1,280</td>
                        </tr>
                        <tr>
                          <td class="border px-4 py-2">Intro to CSS</td>
                          <td class="border px-4 py-2">Adam</td>
                          <td class="border px-4 py-2">858</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              </div>
              <!--/Graph Card-->
          </div>

          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Graph Card-->
              <div class="bg-white border-transparent rounded-lg shadow-lg">
                  <div class="bg-gray-400 border-b-2 border-gray-500 rounded-tl-lg rounded-tr-lg p-2">
                      <h5 class="font-bold uppercase text-gray-600">Najnowsze problemy</h5>
                  </div>
                  <div class="p-5">
                    <table class="table-auto">
                      <tbody>
                        <tr>
                          <td class="border px-4 py-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                          <td class="border px-4 py-2">Adam</td>
                          <td class="border px-4 py-2">858</td>
                        </tr>
                        <tr class="bg-gray-100">
                          <td class="border px-4 py-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                          <td class="border px-4 py-2">Adam</td>
                          <td class="border px-4 py-2">112</td>
                        </tr>
                        <tr>
                          <td class="border px-4 py-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                          <td class="border px-4 py-2">Chris</td>
                          <td class="border px-4 py-2">1,280</td>
                        </tr>
                        <tr>
                          <td class="border px-4 py-2">Intro to CSS</td>
                          <td class="border px-4 py-2">Adam</td>
                          <td class="border px-4 py-2">858</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              </div>
              <!--/Graph Card-->
          </div>

          <div class="w-full md:w-1/2 xl:w-1/3 p-3">
              <!--Graph Card-->
              <div class="bg-white border-transparent rounded-lg shadow-lg">
                  <div class="bg-gray-400 border-b-2 border-gray-500 rounded-tl-lg rounded-tr-lg p-2">
                      <h5 class="font-bold uppercase text-gray-600">Nowi użytkownicy</h5>
                  </div>
                  <div class="p-5">
                    <table class="table-auto">
                      <tbody>
                        <tr>
                          <td class="border px-4 py-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                          <td class="border px-4 py-2">Adam</td>
                          <td class="border px-4 py-2">858</td>
                        </tr>
                        <tr class="bg-gray-100">
                          <td class="border px-4 py-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                          <td class="border px-4 py-2">Adam</td>
                          <td class="border px-4 py-2">112</td>
                        </tr>
                        <tr>
                          <td class="border px-4 py-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
                          <td class="border px-4 py-2">Chris</td>
                          <td class="border px-4 py-2">1,280</td>
                        </tr>
                        <tr>
                          <td class="border px-4 py-2">Intro to CSS</td>
                          <td class="border px-4 py-2">Adam</td>
                          <td class="border px-4 py-2">858</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
              </div>
              <!--/Graph Card-->
            </div>
      </div>
      <hr>

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
  window.onclick = function(event) {
      if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
          var dropdowns = document.getElementsByClassName("dropdownlist");
          for (var i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (!openDropdown.classList.contains('invisible')) {
                  openDropdown.classList.add('invisible');
              }
          }
      }
  }
</script>


</body>

</html>