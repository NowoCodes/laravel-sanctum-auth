<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Covid Cases</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
  </head>
  <body class="antialiased">

    <header class="text-gray-400 bg-gray-900 body-font">
      <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
          <a class="mr-5 hover:text-white">First Link</a>
          <a class="mr-5 hover:text-white">Second Link</a>
          <a class="mr-5 hover:text-white">Third Link</a>
          <a class="hover:text-white">Fourth Link</a>
        </nav>
        <a class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-white lg:items-center lg:justify-center mb-4 md:mb-0">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round"
               stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full"
               viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
          </svg>
          <span class="ml-3 text-xl xl:block lg:hidden">Tailblocks</span>
        </a>
        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
          <button
              class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">
            Button
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
      </div>
    </header>
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
      <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

        <section class="text-gray-400 bg-gray-900 body-font">
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col">
              <div class="h-1 bg-gray-800 rounded overflow-hidden">
                <div class="w-24 h-full bg-indigo-500"></div>
              </div>
              <div class="flex flex-wrap sm:flex-row flex-col py-6 mb-12">
                <h1 class="sm:w-2/5 text-white font-medium title-font text-2xl mb-2 sm:mb-0">Covid Cases</h1>
                <p class="sm:w-3/5 leading-relaxed text-base sm:pl-10 pl-0">A mini project to display covid cases based
                  on countries, date and type.</p>
              </div>
            </div>

            <section class="text-gray-400 bg-gray-900 body-font">
              <div class="container px-5 py-8 mx-auto">
                <div class="lg:w-2/3 flex flex-col sm:flex-row sm:items-center items-start mx-auto">
                  <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-white">Country: NIGERIA</h1>
                  <h1 class="flex-grow sm:pr-16 text-2xl font-medium title-font text-white">{{ $today }}</h1>
                </div>
              </div>
            </section>

            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
              <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                <h2 class="text-xl font-medium title-font text-white mt-5">Confirmed Cases</h2>
                <p class="text-base leading-relaxed mt-2">{{ $confirmedCovidCasesUntilToday }}</p>
              </div>
              <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                <h2 class="text-xl font-medium title-font text-white mt-5">Recovered Cases</h2>
                <p class="text-base leading-relaxed mt-2">{{ $recoveredCovidCasesUntilToday }}</p>
              </div>
              <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                <h2 class="text-xl font-medium title-font text-white mt-5">Deaths</h2>
                <p class="text-base leading-relaxed mt-2">{{ $deadCovidCasesUntilToday }}</p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </body>
</html>
