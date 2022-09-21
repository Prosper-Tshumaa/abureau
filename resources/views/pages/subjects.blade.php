<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <script src="https://cdn.tailwindcss.com"></script>
    <title>Subjects</title>
</head>
<body>
    @include('partials._navbar')
    {{--Subjects section--}}
    <div class="bg-white py-6 sm:py-8 lg:py-12">
  <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
      <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">SUBJECTS</h2>

      <p class="max-w-screen-md text-gray-500 md:text-lg text-center mx-auto"></p>
    </div>
    <!-- text - end -->

    <div class="grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6 xl:gap-8">
      <!-- article - start -->
      <a href="#" class="group h-48 md:h-64 xl:h-96 flex flex-col bg-gray-100 rounded-lg shadow-lg overflow-hidden relative">
        <img src="/images/logo.jpg" loading="lazy" alt="Photo by Minh Pham" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

        <div class="bg-gradient-to-t from-gray-800 md:via-transparent to-transparent absolute inset-0 pointer-events-none"></div>

        <div class="relative p-4 mt-auto">
          <span class="block text-gray-200 text-sm"></span>
          <h2 class="text-white text-xl font-semibold transition duration-100 mb-2">Economics</h2>

          <span class="text-indigo-300 font-semibold"></span>
        </div>
      </a>
      <!-- article - end -->

      <!-- article - start -->
      <a href="#" class="group h-48 md:h-64 xl:h-96 flex flex-col bg-gray-100 rounded-lg shadow-lg overflow-hidden relative">
        <img src="/images/logo.jpg" loading="lazy" alt="Photo by Lorenzo Herrera" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

        <div class="bg-gradient-to-t from-gray-800 md:via-transparent to-transparent absolute inset-0 pointer-events-none"></div>

        <div class="relative p-4 mt-auto">
          <span class="block text-gray-200 text-sm"></span>
          <h2 class="text-white text-xl font-semibold transition duration-100 mb-2">Econometrics</h2>

          <span class="text-indigo-300 font-semibold"></span>
        </div>
      </a>
      <!-- article - end -->

      <!-- article - start -->
      <a href="#" class="group h-48 md:h-64 xl:h-96 flex flex-col bg-gray-100 rounded-lg shadow-lg overflow-hidden relative">
        <img src="/images/logo.jpg" loading="lazy" alt="Photo by Magicle" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

        <div class="bg-gradient-to-t from-gray-800 md:via-transparent to-transparent absolute inset-0 pointer-events-none"></div>

        <div class="relative p-4 mt-auto">
          <span class="block text-gray-200 text-sm"></span>
          <h2 class="text-white text-xl font-semibold transition duration-100 mb-2">Commercial law</h2>

          <span class="text-indigo-300 font-semibold"></span>
        </div>
      </a>
      <!-- article - end -->

      <!-- article - start -->
      <a href="#" class="group h-48 md:h-64 xl:h-96 flex flex-col bg-gray-100 rounded-lg shadow-lg overflow-hidden relative">
        <img src="/images/logo.jpg" loading="lazy" alt="Photo by Martin Sanchez" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

        <div class="bg-gradient-to-t from-gray-800 md:via-transparent to-transparent absolute inset-0 pointer-events-none"></div>

        <div class="relative p-4 mt-auto">
          <span class="block text-gray-200 text-sm"></span>
          <h2 class="text-white text-xl font-semibold transition duration-100 mb-2">Business Mathematics and Statistics</h2>

          <span class="text-indigo-300 font-semibold"></span>
        </div>
      </a>
      <!-- article - end -->

       <!-- article - start -->
      <a href="#" class="group h-48 md:h-64 xl:h-96 flex flex-col bg-gray-100 rounded-lg shadow-lg overflow-hidden relative">
        <img src="/images/logo.jpg" loading="lazy" alt="Photo by Magicle" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

        <div class="bg-gradient-to-t from-gray-800 md:via-transparent to-transparent absolute inset-0 pointer-events-none"></div>

        <div class="relative p-4 mt-auto">
          <span class="block text-gray-200 text-sm"></span>
          <h2 class="text-white text-xl font-semibold transition duration-100 mb-2">Business Information Systems</h2>

          <span class="text-indigo-300 font-semibold"></span>
        </div>
      </a>
      <!-- article - end -->

             <!-- article - start -->
      <a href="#" class="group h-48 md:h-64 xl:h-96 flex flex-col bg-gray-100 rounded-lg shadow-lg overflow-hidden relative">
        <img src="/images/logo.jpg" loading="lazy" alt="Photo by Magicle" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

        <div class="bg-gradient-to-t from-gray-800 md:via-transparent to-transparent absolute inset-0 pointer-events-none"></div>

        <div class="relative p-4 mt-auto">
          <span class="block text-gray-200 text-sm"></span>
          <h2 class="text-white text-xl font-semibold transition duration-100 mb-2">Supplychain Management</h2>

          <span class="text-indigo-300 font-semibold"></span>
        </div>
      </a>
      <!-- article - end -->


      <!-- article - start -->
      <a href="#" class="group h-48 md:h-64 xl:h-96 flex flex-col bg-gray-100 rounded-lg shadow-lg overflow-hidden relative">
        <img src="/images/logo.jpg" loading="lazy" alt="Photo by Magicle" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

        <div class="bg-gradient-to-t from-gray-800 md:via-transparent to-transparent absolute inset-0 pointer-events-none"></div>

        <div class="relative p-4 mt-auto">
          <span class="block text-gray-200 text-sm"></span>
          <h2 class="text-white text-xl font-semibold transition duration-100 mb-2">Business management</h2>

          <span class="text-indigo-300 font-semibold"></span>
        </div>
      </a>
      <!-- article - end -->

            <!-- article - start -->
      <a href="#" class="group h-48 md:h-64 xl:h-96 flex flex-col bg-gray-100 rounded-lg shadow-lg overflow-hidden relative">
        <img src="/images/logo.jpg" loading="lazy" alt="Photo by Magicle" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

        <div class="bg-gradient-to-t from-gray-800 md:via-transparent to-transparent absolute inset-0 pointer-events-none"></div>

        <div class="relative p-4 mt-auto">
          <span class="block text-gray-200 text-sm"></span>
          <h2 class="text-white text-xl font-semibold transition duration-100 mb-2">Business laws</h2>

          <span class="text-indigo-300 font-semibold"></span>
        </div>
      </a>
      <!-- article - end -->

                  <!-- article - start -->
      <a href="#" class="group h-48 md:h-64 xl:h-96 flex flex-col bg-gray-100 rounded-lg shadow-lg overflow-hidden relative">
        <img src="/images/logo.jpg" loading="lazy" alt="Photo by Magicle" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

        <div class="bg-gradient-to-t from-gray-800 md:via-transparent to-transparent absolute inset-0 pointer-events-none"></div>

        <div class="relative p-4 mt-auto">
          <span class="block text-gray-200 text-sm"></span>
          <h2 class="text-white text-xl font-semibold transition duration-100 mb-2">Financial Accounting</h2>

          <span class="text-indigo-300 font-semibold"></span>
        </div>
      </a>
      <!-- article - end -->

                        <!-- article - start -->
      <a href="#" class="group h-48 md:h-64 xl:h-96 flex flex-col bg-gray-100 rounded-lg shadow-lg overflow-hidden relative">
        <img src="/images/logo.jpg" loading="lazy" alt="Photo by Magicle" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

        <div class="bg-gradient-to-t from-gray-800 md:via-transparent to-transparent absolute inset-0 pointer-events-none"></div>

        <div class="relative p-4 mt-auto">
          <span class="block text-gray-200 text-sm"></span>
          <h2 class="text-white text-xl font-semibold transition duration-100 mb-2">Management Accounting</h2>

          <span class="text-indigo-300 font-semibold"></span>
        </div>
      </a>
      <!-- article - end -->

      <!-- article - start -->
      <a href="#" class="group h-48 md:h-64 xl:h-96 flex flex-col bg-gray-100 rounded-lg shadow-lg overflow-hidden relative">
        <img src="/images/logo.jpg" loading="lazy" alt="Photo by Magicle" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

        <div class="bg-gradient-to-t from-gray-800 md:via-transparent to-transparent absolute inset-0 pointer-events-none"></div>

        <div class="relative p-4 mt-auto">
          <span class="block text-gray-200 text-sm"></span>
          <h2 class="text-white text-xl font-semibold transition duration-100 mb-2">Corperate Accounting</h2>

          <span class="text-indigo-300 font-semibold"></span>
        </div>
      </a>
      <!-- article - end -->

        <!-- article - start -->
      <a href="#" class="group h-48 md:h-64 xl:h-96 flex flex-col bg-gray-100 rounded-lg shadow-lg overflow-hidden relative">
        <img src="/images/logo.jpg" loading="lazy" alt="Photo by Magicle" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

        <div class="bg-gradient-to-t from-gray-800 md:via-transparent to-transparent absolute inset-0 pointer-events-none"></div>

        <div class="relative p-4 mt-auto">
          <span class="block text-gray-200 text-sm"></span>
          <h2 class="text-white text-xl font-semibold transition duration-100 mb-2">Principles of Accounting</h2>

          <span class="text-indigo-300 font-semibold"></span>
        </div>
      </a>
      <!-- article - end -->

         <!-- article - start -->
      <a href="#" class="group h-48 md:h-64 xl:h-96 flex flex-col bg-gray-100 rounded-lg shadow-lg overflow-hidden relative">
        <img src="/images/logo.jpg" loading="lazy" alt="Photo by Magicle" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

        <div class="bg-gradient-to-t from-gray-800 md:via-transparent to-transparent absolute inset-0 pointer-events-none"></div>

        <div class="relative p-4 mt-auto">
          <span class="block text-gray-200 text-sm"></span>
          <h2 class="text-white text-xl font-semibold transition duration-100 mb-2">Public Finance</h2>

          <span class="text-indigo-300 font-semibold"></span>
        </div>
      </a>
      <!-- article - end -->

       <!-- article - start -->
      <a href="#" class="group h-48 md:h-64 xl:h-96 flex flex-col bg-gray-100 rounded-lg shadow-lg overflow-hidden relative">
        <img src="/images/logo.jpg" loading="lazy" alt="Photo by Magicle" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

        <div class="bg-gradient-to-t from-gray-800 md:via-transparent to-transparent absolute inset-0 pointer-events-none"></div>

        <div class="relative p-4 mt-auto">
          <span class="block text-gray-200 text-sm"></span>
          <h2 class="text-white text-xl font-semibold transition duration-100 mb-2">Operations</h2>

          <span class="text-indigo-300 font-semibold"></span>
        </div>
      </a>
      <!-- article - end -->

      <!-- article - start -->
      <a href="#" class="group h-48 md:h-64 xl:h-96 flex flex-col bg-gray-100 rounded-lg shadow-lg overflow-hidden relative">
        <img src="/images/logo.jpg" loading="lazy" alt="Photo by Magicle" class="w-full h-full object-cover object-center absolute inset-0 group-hover:scale-110 transition duration-200" />

        <div class="bg-gradient-to-t from-gray-800 md:via-transparent to-transparent absolute inset-0 pointer-events-none"></div>

        <div class="relative p-4 mt-auto">
          <span class="block text-gray-200 text-sm"></span>
          <h2 class="text-white text-xl font-semibold transition duration-100 mb-2">Marketing</h2>

          <span class="text-indigo-300 font-semibold"></span>
        </div>
      </a>
      <!-- article - end -->
    </div>
  </div>
</div>
    @include('partials._footer')
</body>
</html>
