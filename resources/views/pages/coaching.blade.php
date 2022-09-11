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
    <title>Coaching</title>
</head>
<body>
    @include('partials._navbar')
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="max-w-screen-xl px-4 md:px-8 mx-auto">
          <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
            <div>
              <div class="h-64 md:h-auto bg-gray-100 overflow-hidden rounded-lg shadow-lg">
                <img src="https://images.unsplash.com/photo-1610465299996-30f240ac2b1c?auto=format&q=75&fit=crop&w=600&h=750" loading="lazy" alt="Photo by Martin Sanchez" class="w-full h-full object-cover object-center" />
              </div>
            </div>

            <div class="md:pt-8">
              <p class="text-indigo-500 font-bold text-center md:text-left">Who we are</p>

              <h1 class="text-gray-800 text-2xl sm:text-3xl font-bold text-center md:text-left mb-4 md:mb-6">Our competitive advantage</h1>

              <p class="text-gray-500 sm:text-lg mb-6 md:mb-8">
                At Assessment Bureau we understand that in this modern world, at times it's difficult for students to balance their time between classes, studying, writting assignments and running their entrepreneural businesses or freelancing jobs. <br /><br />

                Hence we have developed a model of learning through Assignments, quiz or digital assessments. Instead of students being overwhelmed with their school work and spending more time studying resources and researching they can utilise some of the time on their entrepreneurship work whilst our team ofloads their workload by providing quality solutions tailored to their specific needs.

                Send us your assessment and we quote you for free within the hour......
              </p>

              <h2 class="text-gray-800 text-xl sm:text-2xl font-semibold text-center md:text-left mb-2 md:mb-4">About us</h2>

              <p class="text-gray-500 sm:text-lg mb-6 md:mb-8">Assessment Bureau is an online service provider of Excellent tailored Solutions to tertiary education assignments, digital assessments, dissertations , graphical representations and numerical problems.
                We specialise in the field of Commerce covering from compulsory  subjects / modules such as Financial Accounting ( FAC) , Management Accounting (MAC),  Business Management ( BNU), Micro & Macro Economics ( ECS) , Human Resources Management (HRM) Introductory to Financial Mathematics, to elective modules including but not limited to Risk Management, Strategic Management, Econometrics, Business Information Systems, Business computing,  Statistics, etc.
                Our team of tutors and on-the-field professionals  posses  different expertise in these subjects and are experienced in handling any kind of assignments in accordance to specific needs of our students.
                Not only do we render these services , our team is also available 24/7 to assist students in preparing for exams through virtual lessons that focus on key concepts and models.</p>
            </div>
          </div>
        </div>
      </div>
    @include('partials._footer')
</body>
</html>
