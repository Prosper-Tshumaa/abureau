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
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
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
    <title>Services</title>
</head>
<body>
    @include('partials._navbar')
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
          <!-- text - start -->
          <div class="mb-10 md:mb-16">
            <h2 class="text-black text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Our Services</h2>
          </div>
          <!-- text - end -->

          <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-8 md:gap-12 xl:gap-16">
            <!-- feature - start -->
            <div class="flex gap-4 md:gap-6">
              <div class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center shrink-0 bg-indigo-500 text-white rounded-lg md:rounded-xl shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                </svg>
              </div>

              <div>
                <h3 class="text-lg md:text-xl font-semibold mb-2">Assignment Assistance</h3>
                <a href="#" class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-bold transition duration-100"></a>
              </div>
            </div>
            <!-- feature - end -->

            <!-- feature - start -->
            <div class="flex gap-4 md:gap-6">
              <div class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center shrink-0 bg-indigo-500 text-white rounded-lg md:rounded-xl shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
              </div>

              <div>
                <h3 class="text-lg md:text-xl font-semibold mb-2">Digital Assesment help</h3>
                <a href="#" class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-bold transition duration-100"></a>
              </div>
            </div>
            <!-- feature - end -->

            <!-- feature - start -->
            <div class="flex gap-4 md:gap-6">
              <div class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center shrink-0 bg-indigo-500 text-white rounded-lg md:rounded-xl shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                </svg>
              </div>

              <div>
                <h3 class="text-lg md:text-xl font-semibold mb-2">Exam Prepatory lessons</h3>
                <a href="#" class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-bold transition duration-100"></a>
              </div>
            </div>
            <!-- feature - end -->

            <!-- feature - start -->
            <div class="flex gap-4 md:gap-6">
                <div class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center shrink-0 bg-indigo-500 text-white rounded-lg md:rounded-xl shadow-lg">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                  </svg>
                </div>

                <div>
                  <h3 class="text-lg md:text-xl font-semibold mb-2">Freelance Services Coming Soon</h3>
                  <a href="#" class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-bold transition duration-100"></a>
                </div>
              </div>
              <!-- feature - end -->

            <!-- feature - start -->
            <div class="flex gap-4 md:gap-6">
              <div class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center shrink-0 bg-indigo-500 text-white rounded-lg md:rounded-xl shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
              </div>

              <div>
                <h3 class="text-lg md:text-xl font-semibold mb-2">Speed</h3>
                <a href="#" class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-bold transition duration-100"></a>
              </div>
            </div>
            <!-- feature - end -->

            <!-- feature - start -->
            <div class="flex gap-4 md:gap-6">
              <div class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center shrink-0 bg-indigo-500 text-white rounded-lg md:rounded-xl shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
              </div>

              <div>
                <h3 class="text-lg md:text-xl font-semibold mb-2">Support</h3>
                <a href="#" class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-bold transition duration-100"></a>
              </div>
            </div>
            <!-- feature - end -->

            <!-- feature - start -->
            <div class="flex gap-4 md:gap-6">
              <div class="w-12 md:w-14 h-12 md:h-14 flex justify-center items-center shrink-0 bg-indigo-500 text-white rounded-lg md:rounded-xl shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                </svg>
              </div>

              <div>
                <h3 class="text-lg md:text-xl font-semibold mb-2">Dark Mode</h3>
                <a href="#" class="text-indigo-500 hover:text-indigo-600 active:text-indigo-700 font-bold transition duration-100"></a>
              </div>
            </div>
            <!-- feature - end -->
          </div>
        </div>
      </div>
    @include('partials._footer')
</body>
</html>
