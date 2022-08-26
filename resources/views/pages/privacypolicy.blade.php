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
        <script src="https://cdn.tailwindcss.com"></script>
    <title>Privacy Policy</title>
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

              <h1 class="text-gray-800 text-2xl sm:text-3xl font-bold text-center md:text-left mb-4 md:mb-6">Privacy Policy</h1>
      
              <p class="text-gray-500 sm:text-lg mb-6 md:mb-8">
                This Privacy Policy governs the manner in which Assessment Bureau collects, uses, maintains and discloses information collected from users (each, a "User") of the assessmentsbureau.co.za website ("Site"). 
                This privacy policy applies to the Site and all products and services offered by Assessment Bureau.
                <br /><br />
                Personal identification information
                <br /><br/>
                We may collect personal identification information from Users in a variety of ways, including, but not limited to, when Users visit our site, place an order, 
                fill out a form, and in connection with other activities, services, features or resources we make available on our Site. 
                Users may be asked for, as appropriate, name, email address, mailing address, phone number, credit card information.
                 Users may, however, visit our Site anonymously. We will collect personal identification information from Users only if they voluntarily submit such information to us. 
                 Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities.
                 <br /><br />
                 Non-personal identification information
                 <br /><br/>
                 We may collect non-personal identification information about Users whenever they interact with our Site. Non-personal identification information may include the browser name, 
                 the type of computer and technical information about Users means of connection to our Site, 
                 such as the operating system and the Internet service providers utilized and other similar information.
                 <br /><br />
                 Web browser cookies
                 <br /><br/>
                 Our Site may use "cookies" to enhance User experience. 
                 <br /><br/>
                 User's web browser places cookies on their hard drive for record-keeping purposes and sometimes to track information about them. 
                 User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent. 
                 If they do so, note that some parts of the Site may not function properly. '
                 <br /><br/>
                 Contacting us
                 <br /><br/>
                If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us at:
               Customer Service
               http://assessmentsbureau.co.za
               <br /><br/>
               (+27)84 391 5623 Charles
               <br /><br/>

               (+27)65 860 2821 Prosper
               <br /><br/>
               abureauu@gmail.com
              </p>
            </div>
          </div>
        </div>
      </div>
    @include('partials._footer')
</body>
</html>