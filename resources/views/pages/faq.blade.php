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
    <title>FAQ</title>
</head>
<body>
    @include('partials._navbar')
    <div class="bg-white py-6 sm:py-8 lg:py-12">
      <div class="max-w-screen-2xl px-4 md:px-8 mx-auto">
        <!-- text - start -->
        <div class="mb-10 md:mb-16">
          <h2 class="text-gray-800 text-2xl lg:text-3xl font-bold text-center mb-4 md:mb-6">Frequently asked questions</h2>
        </div>
        <!-- text - end -->

        <div class="grid sm:grid-cols-2 xl:grid-cols-3 gap-8 sm:gap-y-10">
          <!-- question - start -->
          <div class="bg-gray-100 rounded-lg relative p-5 pt-8">
            <span class="w-8 h-8 inline-flex justify-center items-center bg-indigo-500 text-white rounded-full absolute -top-4 left-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
              </svg>
            </span>

            <h3 class="text-indigo-500 text-lg md:text-xl font-semibold mb-3">How we work?</h3>
            <p class="text-gray-500">get in touch with our help desk 24/7 via our chat box or direct link to whatsup or telegram, and request for a Tutor for your specific Subject matter. Your  designated tutor will engage with you and respond to all your enquiries. If you need assitance with an assignment they will request you to upload or send an email of the Assignment including  the Study Resources of that Module, to generate a Quote. All our Service fees are flexible and negotiable.</p>
          </div>
          <!-- question - end -->

          <!-- question - start -->
          <div class="bg-gray-100 rounded-lg relative p-5 pt-8">
            <span class="w-8 h-8 inline-flex justify-center items-center bg-indigo-500 text-white rounded-full absolute -top-4 left-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
              </svg>
            </span>

            <h3 class="text-indigo-500 text-lg md:text-xl font-semibold mb-3">What are the features?</h3>
            <p class="text-gray-500">Assignment assistance includes written assignments with  specifications of our students, Help in Question interpretation and Answering techniques, Quick solutions/ answers and explanations on Terms and Concepts via our Q&A sessions, Solutions to Digital assessments or Quiz.</p>
          </div>
          <!-- question - end -->

          <!-- question - start -->
          <div class="bg-gray-100 rounded-lg relative p-5 pt-8">
            <span class="w-8 h-8 inline-flex justify-center items-center bg-indigo-500 text-white rounded-full absolute -top-4 left-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
              </svg>
            </span>

            <h3 class="text-indigo-500 text-lg md:text-xl font-semibold mb-3">What about integrations?</h3>
            <p class="text-gray-500">We conduct research for dissertations and rely on verified sources and schools of thought.
                Free webinars for our subscribers to discuss topical issues on various subjects, so that members get to interact with each other and get an understanding of these topics from different perspectives using practical examples.
                Assessment Bureau also offers extra lessons for those who feel the need and want to prepare for exams.</p>
          </div>
          <!-- question - end -->

          <!-- question - start -->
          <div class="bg-gray-100 rounded-lg relative p-5 pt-8">
            <span class="w-8 h-8 inline-flex justify-center items-center bg-indigo-500 text-white rounded-full absolute -top-4 left-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
              </svg>
            </span>

            <h3 class="text-indigo-500 text-lg md:text-xl font-semibold mb-3">Is support available?</h3>
            <p class="text-gray-500">We do provide support. if you have any questions, feel free to contact us through email or through Whatsapp on the numbers listed on the contact page</p>
          </div>
          <!-- question - end -->

          <!-- question - start -->
          <div class="bg-gray-100 rounded-lg relative p-5 pt-8">
            <span class="w-8 h-8 inline-flex justify-center items-center bg-indigo-500 text-white rounded-full absolute -top-4 left-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
              </svg>
            </span>

            <h3 class="text-indigo-500 text-lg md:text-xl font-semibold mb-3">How does one upgrage a plan?</h3>
            <p class="text-gray-500">Currently no plans have been set in place .Plans to be added at a later stage.</p>
          </div>
          <!-- question - end -->

          <!-- question - start -->
          <div class="bg-gray-100 rounded-lg relative p-5 pt-8">
            <span class="w-8 h-8 inline-flex justify-center items-center bg-indigo-500 text-white rounded-full absolute -top-4 left-4">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
              </svg>
            </span>

            <h3 class="text-indigo-500 text-lg md:text-xl font-semibold mb-3">Which payment methods are available?</h3>
            <p class="text-gray-500">Payments Can be Done Through EFTS or Direct bank transfer, Payments intergrations through Website Still in Development</p>
          </div>
          <!-- question - end -->
        </div>
      </div>
    </div>
    @include('partials._footer')
</body>
</html>
