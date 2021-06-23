<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ssim project</title>
    <link rel="stylesheet" href="./src/css/tailwind.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.0/gsap.min.js"></script>
  </head>
  <body class="h-screen w-screen overflow-x-hidden">
    <div onclick="topFunction()" id="myBtn" class="hidden fixed h-12 w-12 bg-blue-500 rounded-xl border-2 border-blue-200 bottom-4 right-6 z-30 cursor-pointer text-center">
      <div class="h-full w-full flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
        </svg>
      </div>
    </div>
    <div id="applyBtn" class="hidden fixed h-12 w-[180px] bg-yellow-500 rounded-xl border-2 border-yellow-200 bottom-4 left-6 z-30 cursor-pointer text-center">
      <div class="h-full w-full flex items-center justify-center">
        <p class="text-white font-medium">APPLY ONLINE</p>
      </div>
    </div>

    <!-- Mini Header -->
    <div class="bg-gray-900 text-white">
      <div class="container mx-auto flex justify-between pr-6 py-3">
        <div class="flex items-center">
          <p class="hidden pl-6 font-medium sm:block mt-0.5">TOLL FREE :</p>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-6 mr-1 sm:ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
          </svg>
          <p class="mt-0.5">9876543210</p>
        </div>
        <div class="flex items-center">
          <a class="text-white">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-white">
            <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
            </svg>
          </a>
          <a class="ml-3 text-white">
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
              <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
            </svg>
          </a>
          <a class="ml-3 text-white">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
              <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
              <circle cx="4" cy="4" r="2" stroke="none"></circle>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <!-- Main Header -->
    <header class="text-gray-600 body-font bg-white border-b-2 border-gray-200">
      <div class="container mx-auto flex p-5 items-center justify-between">
        <a class="title-font font-medium text-gray-900 md:mb-0">
          <img class="h-10 lg:h-12" src="https://ssimdwarka.org/wp-content/uploads/2019/12/logo-ssim.png" alt="" />
        </a>
        <nav class="hidden md:ml-auto md:mr-auto md:flex flex-wrap items-center text-sm lg:text-base justify-center">
          <a class="mr-5 hover:text-gray-900 flex items-center">
            About
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </a>
          <a class="mr-5 hover:text-gray-900 flex items-center">
            PGDM
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </a>
          <a class="mr-5 hover:text-gray-900 flex items-center">
            Admission
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </a>
          <a class="hover:text-gray-900">Life @ SSIM</a>
          <a class="hidden lg:block ml-5 hover:text-gray-900">Contact Us</a>
        </nav>
        <div class="flex">
          <button class="hidden sm:block bg-yellow-500 border-0 py-1 px-3 focus:outline-none hover:bg-yellow-600 rounded text-sm text-white">APPLY NOW</button>
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 bg-blue-800 rounded text-white p-1 ml-3 md:hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </div>
      </div>
    </header>
    <!-- Hero -->
    <section class="relative h-[500px]">
      <img
        class="absolute heroSlides route0 h-[500px] object-cover z-10 object-center w-screen"
        alt="hero"
        src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80"
        alt=""
      />
      <img
        class="absolute heroSlides route1 h-[500px] object-cover z-10 object-center w-screen"
        alt="hero"
        src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80"
      />
      <img
        class="absolute heroSlides route2 h-[500px] object-cover z-10 object-center w-screen"
        alt="hero"
        src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80"
      />
      <img
        class="absolute heroSlides route3 h-[500px] object-cover z-10 object-center w-screen"
        alt="hero"
        src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=2604&q=80"
      />
      <img
        class="absolute heroSlides route4 h-[500px] object-cover z-10 object-center w-screen"
        alt="hero"
        src="https://images.unsplash.com/photo-1596496050755-c923e73e42e1?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1472&q=80"
      />
      <img
        class="absolute heroSlides route5 h-[500px] object-cover z-10 object-center w-screen"
        alt="hero"
        src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80"
      />
      <img
        class="absolute heroSlides route6 h-[500px] object-cover z-10 object-center w-screen"
        alt="hero"
        src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80"
      />
      <img
        class="absolute heroSlides route7 h-[500px] object-cover z-10 object-center w-screen"
        alt="hero"
        src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1500&q=80"
      />
      <img
        class="absolute heroSlides route8 h-[500px] object-cover z-10 object-center w-screen"
        alt="hero"
        src="https://images.unsplash.com/photo-1610008885395-d4b47c2f5c8c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80"
      />
      <img
        class="absolute heroSlides route9 h-[500px] object-cover z-10 object-center w-screen"
        alt="hero"
        src="https://images.unsplash.com/photo-1503428593586-e225b39bddfe?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80"
      />
      <div class="absolute h-[500px] w-screen flex items-center justify-center z-10 p-5">
        <div class="p-6 rounded-3xl md:w-[640px] bg-black bg-opacity-20">
          <h1 class="text-2xl md:text-3xl lg:text-4xl text-white font-semibold">
            World-class
            <span class="text-yellow-300">Management</span>
            Education
          </h1>
          <p class="text-white pt-3 text-base md:text-lg lg:text-xl">We groom future managers and entrepreneurs, who possess the acumen to be the leaders of tomorrow’s businesses</p>
          <button class="bg-yellow-500 border-0 py-1 px-3 mt-3 focus:outline-none hover:bg-yellow-600 rounded text-lg text-white">OUR PROGRAMS</button>
        </div>
      </div>
    </section>

    <!-- Stats -->
    <section class="relative text-gray-600 body-font">
      <div class="container px-5 pt-12 pb-12 mx-auto">
        <div class="flex flex-wrap -m-4 text-center">
          <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
            <div class="border-2 border-gray-200 px-4 py-6 rounded-3xl">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-red-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"></path>
                <circle cx="9" cy="7" r="4"></circle>
                <path d="M23 21v-2a4 4 0 00-3-3.87m-4-12a4 4 0 010 7.75"></path>
              </svg>
              <h2 class="title-font font-medium text-3xl text-gray-900">2.7K</h2>
              <p class="leading-relaxed">Students</p>
            </div>
          </div>
          <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
            <div class="border-2 border-gray-200 px-4 py-6 rounded-3xl">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-green-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                />
              </svg>
              <h2 class="title-font font-medium text-3xl text-gray-900">900</h2>
              <p class="leading-relaxed">Placements</p>
            </div>
          </div>
          <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
            <div class="border-2 border-gray-200 px-4 py-6 rounded-3xl">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-blue-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
              </svg>
              <h2 class="title-font font-medium text-3xl text-gray-900">74</h2>
              <p class="leading-relaxed">Classrooms</p>
            </div>
          </div>
          <div class="p-4 md:w-1/4 sm:w-1/2 w-full">
            <div class="border-2 border-gray-200 px-4 py-6 rounded-3xl">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="text-yellow-500 w-12 h-12 mb-3 inline-block" viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              </svg>
              <h2 class="title-font font-medium text-3xl text-gray-900">46</h2>
              <p class="leading-relaxed">Awards</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Cards -->
    <section class="text-gray-400 body-font">
      <div class="container px-5 py-6 pb-12 mx-auto">
        <div class="flex flex-wrap -m-4 justify-center">
          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-yellow-500 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="https://images.unsplash.com/photo-1496345875659-11f7dd282d1d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80"
                alt="content"
              />

              <div class="bg-white px-2 rounded text-center">
                <h3 class="tracking-widest text-gray-900 text-lg font-semibold title-font">DIRECTOR'S MESSAGE</h3>
              </div>

              <p class="pt-3 text-white text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate praesentium iure eveniet, nulla quae numquam repellat esse porro incidunt eos? Placeat praesentium perferendis, impedit deserunt consectetur consequatur. Culpa, beatae!
                Dicta!
              </p>
            </div>
          </div>
          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-blue-500 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="https://images.unsplash.com/photo-1546422904-90eab23c3d7e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1504&q=80"
                alt="content"
              />
              <div class="bg-white px-2 rounded text-center">
                <h3 class="tracking-widest text-gray-900 text-lg font-semibold title-font">NEWS AND EVENTS</h3>
              </div>
              <p class="pt-3 text-white text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate praesentium iure eveniet, nulla quae numquam repellat esse porro incidunt eos? Placeat praesentium perferendis, impedit deserunt consectetur consequatur. Culpa, beatae!
                Dicta!
              </p>
            </div>
          </div>
          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-green-500 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="https://images.unsplash.com/photo-1567168539593-59673ababaae?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=668&q=80"
                alt="content"
              />
              <div class="bg-white px-2 rounded text-center">
                <h3 class="tracking-widest text-gray-900 text-lg font-semibold title-font">ALUMNI TESTIMONIAL</h3>
              </div>
              <p class="pt-3 text-white text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate praesentium iure eveniet, nulla quae numquam repellat esse porro incidunt eos? Placeat praesentium perferendis, impedit deserunt consectetur consequatur. Culpa, beatae!
                Dicta!
              </p>
            </div>
          </div>
          <div class="xl:w-1/4 md:w-1/2 p-4">
            <div class="bg-red-500 p-6 rounded-lg">
              <img
                class="h-40 rounded w-full object-cover object-center mb-6"
                src="https://images.unsplash.com/photo-1590415108862-fa060c0e358f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDR8fGZlZWR8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=60"
                alt="content"
              />
              <div class="bg-white px-2 rounded text-center">
                <h3 class="tracking-widest text-gray-900 text-lg font-semibold title-font">NEWSLETTER AND FEED</h3>
              </div>
              <p class="pt-3 text-white text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate praesentium iure eveniet, nulla quae numquam repellat esse porro incidunt eos? Placeat praesentium perferendis, impedit deserunt consectetur consequatur. Culpa, beatae!
                Dicta!
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SOME POINTS -->
    <section class="text-gray-400 bg-blue-900 body-font">
      <div class="container px-5 py-16 mx-auto">
        <div class="flex flex-wrap lg:w-4/5 sm:mx-auto sm:mb-2 -mx-2">
          <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-yellow-500 rounded flex p-4 h-full items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-white w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                <path d="M22 4L12 14.01l-3-3"></path>
              </svg>
              <span class="title-font font-medium text-white">ISO 2008 CERTIFIED</span>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-blue-500 rounded flex p-4 h-full items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-white w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                <path d="M22 4L12 14.01l-3-3"></path>
              </svg>
              <span class="title-font font-medium text-white">ACCI ACCREDITTED</span>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-green-500 rounded flex p-4 h-full items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-white w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                <path d="M22 4L12 14.01l-3-3"></path>
              </svg>
              <span class="title-font font-medium text-white">A+ GRADE BY NICE</span>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="bg-red-500 rounded flex p-4 h-full items-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="text-white w-6 h-6 flex-shrink-0 mr-4" viewBox="0 0 24 24">
                <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                <path d="M22 4L12 14.01l-3-3"></path>
              </svg>
              <span class="title-font font-medium text-white">AWARDED BEST 2020</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="body-font text-gray-900">
      <div class="container px-5 py-16 mx-auto">
        <div class="flex flex-wrap -m-4">
          <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
            <div class="h-full text-center">
              <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-900" src="https://media.sproutsocial.com/uploads/Headshot_Katie-Bisbee-Stake_Desktop@2x.png" />
              <p class="leading-relaxed">We’re an incredibly data-driven organization, and social is no exception. Rise of Brands allows us to analyze and track trends on social media to make sure our content is resonating.</p>
              <span class="inline-block h-1 w-10 rounded bg-yellow-500 mt-6 mb-4"></span>
              <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">KATIE BISBEE</h2>
              <p class="text-yellow-500">Chief Marketing Officer</p>
            </div>
          </div>
          <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
            <div class="h-full text-center">
              <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-900" src="https://media.sproutsocial.com/uploads/Headshot_Aaron-Bata-Stake_Desktop@2x.png" />
              <p class="leading-relaxed">What customers really care about is person to person connection. We had a lot of blind spots in our social customer care, so bringing on a partner like Rise of Brands was incredibly important.</p>
              <span class="inline-block h-1 w-10 rounded bg-blue-500 mt-6 mb-4"></span>
              <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">AARON BATA</h2>
              <p class="text-blue-500">Head of Customer Experience</p>
            </div>
          </div>
          <div class="lg:w-1/3 lg:mb-0 p-4">
            <div class="h-full text-center">
              <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-900" src="https://media.sproutsocial.com/uploads/Headshot_Luka-Dukich-Stake_Desktop@2x.png" />
              <p class="leading-relaxed">SSI gives us the ability to see what types of campaigns are working in real time, as well as the ability to adjust appropriately. I don’t think we’ve ever had a tool as such.</p>
              <span class="inline-block h-1 w-10 rounded bg-red-500 mt-6 mb-4"></span>
              <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">LUKA DUKICH</h2>
              <p class="text-red-500">Senior Digital Content Manager</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Anti Points -->
    <section class="text-gray-400 bg-gray-900 body-font">
      <div class="container px-5 py-16 mx-auto flex flex-wrap">
        <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
          <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-800 pointer-events-none"></div>
          </div>
          <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-red-500 text-white relative z-10 title-font font-medium text-sm">1</div>
          <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
            <div class="flex-shrink-0 w-24 h-24 bg-red-200 text-red-500 rounded-full inline-flex items-center justify-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
              </svg>
            </div>
            <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
              <h2 class="font-medium title-font text-white mb-1 text-xl">Great storytelling</h2>
              <p class="leading-relaxed">Education can, and should be engaging. If it's not, then one won't learn unless forced to.</p>
            </div>
          </div>
        </div>
        <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
          <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-800 pointer-events-none"></div>
          </div>
          <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-green-500 text-white relative z-10 title-font font-medium text-sm">2</div>
          <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
            <div class="flex-shrink-0 w-24 h-24 bg-green-200 text-green-500 rounded-full inline-flex items-center justify-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                <circle cx="12" cy="5" r="3"></circle>
                <path d="M12 22V8M5 12H2a10 10 0 0020 0h-3"></path>
              </svg>
            </div>
            <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
              <h2 class="font-medium title-font text-white mb-1 text-xl">Confront own ideas</h2>
              <p class="leading-relaxed">At SSIM we push your thinking. To challenge how you interpreted what you were just taught.</p>
            </div>
          </div>
        </div>
        <div class="flex relative pb-10 sm:items-center md:w-2/3 mx-auto">
          <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
            <div class="h-full w-1 bg-gray-800 pointer-events-none"></div>
          </div>
          <div class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-blue-500 text-white relative z-10 title-font font-medium text-sm">3</div>
          <div class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">
            <div class="flex-shrink-0 w-24 h-24 bg-blue-200 text-blue-500 rounded-full inline-flex items-center justify-center">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-12 h-12" viewBox="0 0 24 24">
                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
              </svg>
            </div>
            <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
              <h2 class="font-medium title-font text-white mb-1 text-xl">Amazing teachers</h2>
              <p class="leading-relaxed">Teacher that love their subject, best at what they are teaching and and inspire you to want to learn more.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Awards -->
    <section class="bg-blue-100 py-3">
      <div class="container px-5 mx-auto">
        <div class="flex flex-col sm:flex-row justify-center items-center">
          <div class="relative px-2 py-6">
            <svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="alt-4c3fqagkj4j0" class="mw-33p pr300 px350-ns w-100p" xmlns:xlink="http://www.w3.org/1999/xlink" fill="none" height="40" id="svg-4c3fqagkj4j0" role="img" viewBox="0 0 144 83">
              <title id="alt-4c3fqagkj4j0">Havas</title>
              <mask height="19" id="a" maskUnits="userSpaceOnUse" width="14" x="130" y="38"><path clip-rule="evenodd" d="m130.077 38.8779h13.923v17.2695h-13.923z" fill="#fff" fill-rule="evenodd"></path></mask>
              <g clip-rule="evenodd" fill="#000" fill-rule="evenodd">
                <path d="m.00170898 82.38h16.36929102v-32.9509h-16.36929102z" fill-opacity=".4"></path>
                <path d="m0 32.9518h16.3685v-32.9518h-16.3685z" fill-opacity=".6"></path>
                <path d="m.0015564 32.952v16.4746h32.7386436v32.9536h16.3702v-32.9536-16.4746z"></path>
                <path
                  d="m65.7606 32.9723h2.6956v8.716h.0651c.8879-1.9812 3.2008-2.811 5.1683-2.811 4.3126 0 5.6465 2.4895 5.6465 6.0334v10.8544h-2.6965v-11.1732c0-2.0118-1.2689-3.3203-3.3301-3.3203-3.2668 0-4.8533 2.2022-4.8533 5.1713v9.3222h-2.6956z"
                ></path>
                <path
                  d="m93.1946 47.2412c-1.0467.766-3.0767.7975-4.8828 1.1172-1.7766.3188-3.2989.9574-3.2989 2.97 0 1.7846 1.5223 2.4231 3.1704 2.4231 3.5541 0 5.0113-2.2336 5.0113-3.7334zm4.3793 8.4609c-.4773.283-1.0805.4446-1.9362.4446-1.3965 0-2.2843-.7678-2.2843-2.5542-1.4911 1.7584-3.4872 2.5542-5.7732 2.5542-2.9804 0-5.4209-1.3408-5.4209-4.6288 0-3.7352 2.7556-4.5327 5.5502-5.0751 2.9812-.5739 5.5172-.3818 5.5172-2.4249 0-2.3638-1.9337-2.7464-3.646-2.7464-2.2861 0-3.9654.7023-4.093 3.1298h-2.6966c.1623-4.088 3.3015-5.5241 6.9466-5.5241 2.9509 0 6.1534.6709 6.1534 4.5327v8.4924c0 1.2762 0 1.8492.8566 1.8492.2196 0 .4739-.0314.8262-.159z"
                ></path>
                <path d="m106.639 55.7648h-2.885l-6.0896-16.5043h3.0136l4.6 13.7571h.062l4.472-13.7571h2.822z"></path>
                <path
                  d="m124.434 47.2412c-1.047.766-3.077.7975-4.885 1.1172-1.775.3188-3.296.9574-3.296 2.97 0 1.7846 1.521 2.4231 3.167 2.4231 3.554 0 5.014-2.2336 5.014-3.7334zm4.379 8.4609c-.48.283-1.083.4446-1.937.4446-1.397 0-2.284-.7678-2.284-2.5542-1.492 1.7584-3.489 2.5542-5.774 2.5542-2.98 0-5.422-1.3408-5.422-4.6288 0-3.7352 2.759-4.5327 5.55-5.0751 2.983-.5739 5.519-.3818 5.519-2.4249 0-2.3638-1.933-2.7464-3.647-2.7464-2.283 0-3.962.7023-4.091 3.1298h-2.697c.16-4.088 3.3-5.5241 6.946-5.5241 2.949 0 6.152.6709 6.152 4.5327v8.4924c0 1.2762 0 1.8492.857 1.8492.223 0 .477-.0314.828-.159z"
                ></path>
              </g>
              <g mask="url(#a)">
                <path
                  clip-rule="evenodd"
                  d="m132.772 50.5604c.097 2.4266 2.19 3.191 4.412 3.191 1.679 0 3.961-.3818 3.961-2.4564 0-2.1052-2.663-2.4598-5.359-3.0634-2.662-.6062-5.36-1.5033-5.36-4.6602 0-3.322 3.268-4.6935 6.122-4.6935 3.616 0 6.501 1.1487 6.723 5.1704h-2.696c-.19-2.1061-2.03-2.7778-3.806-2.7778-1.617 0-3.488.4472-3.488 2.1078 0 1.9471 2.853 2.265 5.361 2.8713 2.695.6079 5.358 1.5016 5.358 4.6925 0 3.9282-3.648 5.2053-6.977 5.2053-3.678 0-6.788-1.5007-6.946-5.587z"
                  fill="#000"
                  fill-rule="evenodd"
                ></path>
              </g>
            </svg>
          </div>
          <div class="relative px-10 py-6">
            <svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="alt-6durb25nkbv0" class="mw-33p px200 px350-ns w-100p" height="80" id="svg-6durb25nkbv0" role="img" viewBox="0 0 144 80">
              <title id="alt-6durb25nkbv0">Unicef</title>
              <g fill="#000" fill-rule="nonzero">
                <path
                  d="M122.145 23.865c-.759.127-1.477.316-2.194.548.148.148.295.296.464.443a11.82 11.82 0 011.73-.991zm12.468 5.21a12.139 12.139 0 00-2.236-2.404c-.422.358-.865.696-1.329.991.632.78 1.181 1.625 1.645 2.532a19.078 19.078 0 001.92-1.118zm-2.722-2.805a12.828 12.828 0 00-2.869-1.646c-.168.19-.358.38-.548.57.78.59 1.519 1.245 2.173 1.983.443-.253.865-.57 1.244-.907zm-3.459-1.857a10.803 10.803 0 00-2.194-.548c.611.295 1.181.633 1.73.991.168-.147.316-.295.464-.443zM124.191 23c7.468 0 13.523 6.118 13.523 13.628 0 7.531-6.055 13.628-13.523 13.628s-13.522-6.118-13.522-13.628S116.723 23 124.191 23zm2.258 2.764a5.767 5.767 0 001.012-.528 12.918 12.918 0 00-2.278-1.181c.464.548.886 1.118 1.266 1.709zm-1.941.443a5.65 5.65 0 001.35-.232 19.011 19.011 0 00-1.35-1.794v2.026zm1.687.295a6.432 6.432 0 01-1.708.295v2.215a12.54 12.54 0 002.848-.4 20.416 20.416 0 00-1.14-2.11zm1.794-.907c-.38.274-.781.506-1.224.696.422.696.802 1.413 1.139 2.173.781-.253 1.519-.57 2.194-.95a12.236 12.236 0 00-2.109-1.92zm-6.055.169c.401-.591.823-1.16 1.266-1.71-.802.317-1.561.718-2.278 1.182.316.211.653.38 1.012.528zm1.962-1.583c-.485.57-.949 1.182-1.35 1.794.422.126.886.19 1.35.232V24.18zm-7.299 22.91c.295.106.717.233 1.245.211.696-.042 1.603-.38 2.468-.717.865-.316 3.143-.865 3.67-.97.549-.106.675-.338.802-.591.127-.232.042-.59-.021-.991s-.169-1.055-.19-1.667c-.021-.612-.042-1.14-.991-1.751-.95-.612-1.562-1.329-1.498-1.856.063-.549.696-.992.696-.992s-.148-.464-.084-.654c.063-.19.654-.126.654-.126s-.085-.654-.043-.823c.043-.169.338-.085.338-.085l.274-.168s-.211-.464-.295-.76c-.085-.295.084-.548.443-.548.337 0 .78-.042 1.814-.274 1.034-.233 1.498-2.237 3.945-2.616 2.447-.38 4.346 1.476 4.346 1.476s3.902 3.65 1.35 7.785c-2.215 3.586-5.042 2.679-5.042 2.679s-.506.232-.253 1.287c.232 1.033 1.73 1.898 1.73 1.898l.126.064a12.992 12.992 0 004.979-10.232c0-2.595-.76-5.02-2.089-7.067-.633.422-1.308.802-2.004 1.16.19.401.338.802.485 1.224-.253-.148-.527-.274-.801-.401l-.253-.57c-.211.106-.422.19-.633.275a5.219 5.219 0 00-1.266-.17c.57-.189 1.118-.421 1.645-.653A12.79 12.79 0 00130.52 28c-.738.422-1.519.78-2.363 1.033.317.76.591 1.54.802 2.32a3.584 3.584 0 00-.57.212 20.849 20.849 0 00-.822-2.363c-.992.274-2.026.422-3.08.443v2.553a20.666 20.666 0 003.459-.359c-.358.232-.611.506-.843.76-.844.126-1.73.19-2.616.21v.866c-.127 0-.275.02-.443.02h-.169v-4.07a15.34 15.34 0 01-1.413-.106 7.298 7.298 0 00-.507-.697c.612.106 1.266.17 1.92.19v-2.215a6.59 6.59 0 01-1.709-.295 17.683 17.683 0 00-.907 1.624 9.709 9.709 0 00-.485-.38c.253-.506.527-.99.823-1.476a6.349 6.349 0 01-1.224-.696c-.548.38-1.055.822-1.519 1.287a4.26 4.26 0 00-.717-.127 14.942 14.942 0 011.751-1.54 4.713 4.713 0 01-.549-.57 12.51 12.51 0 00-2.869 1.646c-2.995 2.278-4.978 5.822-5.126 9.852.084-.064 1.287-1.16 1.856-1.287.591-.127 1.034-1.14 1.034-1.33 0-.168-1.097-2.868.232-4.661 1.16-1.561 2.975-2.363 5.802-.781 2.826 1.582 2.299 3.86 1.751 4.599-.549.738-.781.97-.697 1.329.085.338.338.612.232.78-.105.17-.654.233-.654.233s.127.358.106.506c-.021.126-.317.105-.317.105s.064.211.022.359c-.043.148-.549.063-.549.063s.106.928-1.118.78c-1.224-.147-1.498-.548-1.856-.252-.359.274-.296.654-.043 1.73.254 1.075.359 3.522.359 3.522l.738.528s1.14.063 1.414.084c.274.021.569.106.738.106.169.02.886-.549 1.266-.633.38-.085.506.02.506.126s-.105.36-.105.36.611-.233.822-.17c.211.064.338.274.169 1.055-.169.78-.506 1.287-1.181 1.35-.675.085-1.139-.253-1.625-.232-.485.021-1.919.675-3.08.59-1.16-.105-1.455-.59-1.455-.59s-.401.738-.464 1.034c-.042.19 0 .422.021.548.443.401.886.78 1.329 1.118z"
                ></path>
                <path
                  d="M117.714 51.395c-.717.127-2.468-.084-3.523-1.35-.886-1.076-1.392-3.67-1.245-3.776.148-.106 1.456.949 2.827 2.194 1.371 1.244 2.658 2.805 1.941 2.932zm-3.186.232c-.105.148-2.004.696-4.05-.506-2.088-1.203-3.08-3.46-3.059-3.565.063-.19 1.456.126 4.072 1.603 2.616 1.456 3.185 2.3 3.037 2.468zm-1.793-2.595c-.147.064-2.004-.844-2.552-3.164-.549-2.32.169-3.924.316-3.987.253-.106 1.076 1.265 1.688 3.354.612 2.11.802 3.734.548 3.797zm-2.32-.97c-.232.084-2.257-.76-3.713-2.532-1.245-1.497-1.835-3.987-1.709-4.071.127-.085 1.814 1.392 3.207 2.974 1.371 1.561 2.426 3.544 2.215 3.629zm-1.308-3.375c-.295-.064-1.181-1.055-1.055-3.545.084-1.582 1.308-3.607 1.54-3.586.295.021.443 1.477.317 3.397-.127 1.94-.486 3.797-.802 3.733zm-4.62-9.283c.232-.168 1.287 1.625 1.941 3.123.569 1.265 1.287 3.987.991 4.092-.19.063-1.687-.886-2.531-3.143-.675-1.836-.507-3.987-.401-4.072zm5.084-1.877c.211.063.127 1.687-.506 3.396-.612 1.709-1.456 3.228-1.646 3.122-.19-.105-.527-2.13.063-3.67.591-1.54 1.878-2.911 2.089-2.848zm-2.173 1.35c-.169-.211-.253-2.046.992-3.607 1.181-1.52 2.236-1.983 2.426-1.899.189.105-.464 1.835-1.266 3.059-.802 1.223-2.025 2.616-2.152 2.447zm-.359-3.059c-.274-.148-.253-1.561.443-2.996.612-1.286 1.941-2.51 2.173-2.426.232.085-.253 1.92-.759 3.08-.443 1.013-1.624 2.469-1.857 2.342zm-1.118-2.088c.211-.043.781 1.56.886 3.712.106 2.173-.105 3.861-.253 3.861-.147 0-1.265-.928-1.329-3.228-.063-2.278.485-4.303.696-4.345zm22.51 27.846c-.317.106-.443-1.308-3.144-3.143a11.624 11.624 0 00-1.202-.738c-.317.19-.654.38-1.013.632-2.7 1.836-2.805 3.25-3.143 3.144-.316-.106-.844-.697-.844-.697s1.857-2.278 4.051-3.544c-1.287-.57-2.026-.59-2.026-.59s-.928 1.56-3.839 1.392c-2.911-.169-4.43-.823-4.915-1.14-.106-.084-.612-.59 3.08-.927 3.459-.317 6.181-.106 8.586.843 2.468-1.054 5.274-1.286 8.86-.949 3.671.338 3.185.844 3.08.928-.485.317-2.004.97-4.915 1.14-2.891.168-3.84-1.393-3.84-1.393s-.823.021-2.257.696c2.32 1.224 4.282 3.671 4.282 3.671s-.464.57-.801.675zm2.236-6.287c-.717-.126.569-1.708 1.941-2.953 1.371-1.244 2.679-2.3 2.826-2.194.148.106-.358 2.7-1.244 3.776-1.034 1.287-2.806 1.498-3.523 1.372zm3.206.212c-.147-.148.401-.992 3.038-2.469 2.616-1.476 4.008-1.793 4.072-1.603.042.106-.971 2.363-3.059 3.565-2.047 1.203-3.945.654-4.051.507zm1.772-2.574c-.232-.064-.063-1.688.549-3.797.612-2.11 1.434-3.46 1.688-3.355.147.064.864 1.667.316 3.987-.549 2.321-2.405 3.228-2.553 3.165zm2.342-.992c-.232-.084.844-2.067 2.215-3.628 1.392-1.561 3.08-3.038 3.207-2.975.126.085-.464 2.574-1.709 4.072-1.456 1.772-3.481 2.616-3.713 2.531zm1.287-3.354c-.295.063-.654-1.814-.781-3.734-.126-1.92.021-3.396.317-3.396.232 0 1.455 2.004 1.54 3.586.105 2.468-.781 3.48-1.076 3.544zm4.62-9.282c.126.084.295 2.236-.38 4.05-.844 2.279-2.341 3.207-2.531 3.144-.296-.106.422-2.827.991-4.093.633-1.477 1.688-3.291 1.92-3.101zM138.81 33.4c.211-.063 1.498 1.308 2.088 2.848.591 1.54.232 3.565.064 3.67-.19.106-1.034-1.413-1.646-3.121-.612-1.71-.696-3.333-.506-3.397zm2.194 1.35c-.127.17-1.35-1.223-2.152-2.447-.802-1.223-1.456-2.953-1.266-3.059.19-.105 1.224.38 2.426 1.899 1.224 1.582 1.139 3.417.992 3.607zm.337-3.037c-.232.126-1.413-1.33-1.856-2.342-.506-1.16-.992-2.996-.76-3.08.232-.084 1.561 1.14 2.173 2.426.718 1.434.739 2.848.443 2.996zm1.118-2.089c.211.042.76 2.046.697 4.346-.064 2.3-1.182 3.227-1.33 3.227-.147 0-.358-1.687-.253-3.86.106-2.152.675-3.755.886-3.713zM13.923 43.442c0 .506-.042 2.932-.78 4.873-.823 2.152-3.017 2.974-4.62 2.974-3.755 0-4.578-2.637-4.578-6.244V32.788H0V46.67c0 4.176 2.49 7.488 6.814 7.488 2.89 0 5.548-1.075 7.11-3.67h.084v3.059h3.84V32.789h-3.925v10.653zM25.335 32.788h-3.839v20.759h3.924V42.26c0-4.05 1.076-4.957 1.645-5.548 1.646-1.645 3.798-1.519 3.798-1.519 3.312 0 4.746 1.857 4.746 5.295v13.059h3.924V39.202c0-6.646-6.413-7.025-7.848-7.025-2.067 0-4.957 1.076-6.286 3.67h-.085v-3.059h.021zM46.748 53.547V32.789h-3.924v20.758h3.924zm-4.304-25.59h4.662v-4.26h-4.662v4.26zM66.747 39.434c-.21-4.515-3.523-7.278-7.89-7.278-6.581 0-9.64 5.084-9.64 11.16 0 6.117 2.637 10.821 9.303 10.821 4.578 0 8.059-2.848 8.396-7.53h-3.924c-.21 2.974-1.814 4.661-4.43 4.661-3.755 0-5.21-3.27-5.21-8.143 0-4.873 1.455-8.143 5.21-8.143 2.806 0 4.05 1.815 4.262 4.43h3.923v.022zM86.957 43.906v-1.94c0-5.739-2.932-9.663-9.135-9.79-6.582 0-9.64 5.085-9.64 11.16 0 6.118 2.637 10.823 9.303 10.823 4.957 0 8.607-2.363 9.219-7.068h-4.135c-.464 3.017-1.983 4.22-5.042 4.22-4.008 0-5.506-3.755-5.21-7.405h14.64zm-14.62-2.721c0-3.397 1.941-6.16 5.211-6.16 3.797 0 5.38 2.679 5.295 6.16H72.338zM94.91 53.547V35.51h4.79v-2.722h-4.79v-3.312c-.126-2.278 1.16-2.848 3.397-2.848.654 0 1.329.085 1.983.127v-3.27c-.95-.169-1.857-.422-2.806-.422-2.932 0-6.37 1.203-6.497 5.738v3.966h-4.072v2.722h4.05v18.015h3.945v.043z"
                ></path>
              </g>
            </svg>
          </div>
          <div class="relative px-2 py-6">
            <svg xmlns="http://www.w3.org/2000/svg" aria-labelledby="alt-3esadetjudtg" class="mw-33p pl300 px350-ns w-100p" fill="none" height="40" id="svg-3esadetjudtg" role="img" viewBox="0 0 144 80">
              <title id="alt-3esadetjudtg">IHG</title>
              <path
                d="m138.541 18.5294c.565 0 .941-.1882.941-.7529s-.376-.753-.941-.753h-.753v1.5059zm-1.882-2.447h1.882c1.318 0 2.071.5647 2.071 1.6941 0 .7529-.565 1.3176-1.13 1.5059l1.506 2.2588h-1.317l-1.318-2.0706h-.565v2.0706h-1.129zm6.4 2.8235c0-2.6353-1.883-4.5177-4.518-4.5177s-4.517 1.8824-4.517 4.7059 2.07 4.5177 4.517 4.5177c2.635-.1883 4.518-2.0706 4.518-4.7059zm-9.977 0c0-3.0118 2.447-5.4588 5.459-5.4588 3.2 0 5.459 2.447 5.459 5.4588 0 3.2-2.447 5.4588-5.459 5.4588s-5.459-2.4471-5.459-5.4588zm-28.8 3.3882c-3.2 0-6.0232.753-8.282 2.2588-2.4471 1.5059-4.3294 3.5765-5.4588 6.0236-1.3177 2.6353-1.8824 5.4588-1.8824 8.847 0 3.5765.753 6.5883 2.0706 9.2236 1.3177 2.6353 3.2 4.5176 5.6471 6.0235 2.447 1.3176 5.0825 2.0706 8.0945 2.0706 3.953 0 7.341-1.1294 10.164-3.2 2.824-2.2588 4.33-4.8941 4.518-8.2824h-16v-11.1059h28.423c.377 2.2589.565 4.3295.565 6.2118 0 5.6471-1.317 10.5412-3.765 14.6824-2.447 4.1411-5.835 7.5294-9.976 9.7882s-8.847 3.3882-14.118 3.3882c-5.4585 0-10.5408-1.3176-14.8702-3.7647-4.3294-2.447-7.7177-5.8353-9.9765-10.1647s-3.5765-9.2235-3.5765-14.6823c0-5.8353 1.3177-10.9177 3.7647-15.0589 2.4471-4.3294 5.8353-7.5294 10.1647-9.9764 4.5177-2.4471 9.2236-3.5765 14.4938-3.5765 4.33 0 8.283.7529 12.047 2.4471 3.765 1.6941 6.777 3.9529 9.224 6.7764l-8.282 7.7177c-3.765-3.7647-8.095-5.6471-12.989-5.6471zm-82.8232-10.1647h12.0471v21.8353h23.7176v-21.8353h12.0471v54.7765h-12.0471v-21.8353h-23.9059v21.8353h-12.047v-54.7765zm-9.4117 54.7765h-12.0471v-54.7765h12.0471z"
                fill="#000"
              ></path>
            </svg>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="text-gray-600 body-font bg-blue-900">
      <div class="container px-5 py-12 mx-auto">
        <div class="flex flex-wrap md:text-left text-center -mb-10 -mx-4 justify-between">
          <div class="lg:w-1/6 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-yellow-300 tracking-widest text-sm mb-3">ABOUT</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-white hover:text-yellow-300">The Group</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-300">The Institution</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-300">Newsletter</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-300">Dean Message</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/6 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-yellow-300 tracking-widest text-sm mb-3">PROGRAM</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-white hover:text-yellow-300">Jr. Management</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-300">Sr. Management</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-300">Upcoming Events</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-300">Aluminies</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/6 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-yellow-300 tracking-widest text-sm mb-3">ADMISSIONS</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-white hover:text-yellow-300">Online Form</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-300">Fee Structure</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-300">Payment Options</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-300">Brochure</a>
              </li>
            </nav>
          </div>
          <div class="lg:w-1/6 md:w-1/2 w-full px-4">
            <h2 class="title-font font-medium text-yellow-300 tracking-widest text-sm mb-3">OTHERS</h2>
            <nav class="list-none mb-10">
              <li>
                <a class="text-white hover:text-yellow-300">Sitemap</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-300">Disclaimer</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-300">Privacy</a>
              </li>
              <li>
                <a class="text-white hover:text-yellow-300">Terms</a>
              </li>
            </nav>
          </div>
        </div>
      </div>

      <div class="bg-gray-900">
        <div class="container mx-auto py-4 px-5 pb-[80px] flex flex-wrap flex-col sm:flex-row">
          <p class="text-white text-sm text-center sm:text-left">© 2020 SSIMDWARKA.ORG</p>
          <span class="sm:ml-auto sm:mt-0 mt-2 sm:w-auto w-full sm:text-left text-center text-white text-sm">Designed by VeroXyle</span>
        </div>
      </div>
    </footer>

    <script>
      gsap.from('.heroSlides', { opacity: 0, ease: Power1.easeInOut, duration: 5, stagger: 5 })

      mybutton = document.getElementById('myBtn')
      applyBtn = document.getElementById('applyBtn')

      window.onscroll = function () {
        scrollFunction()
      }

      function scrollFunction() {
        if (document.body.scrollTop > 128 || document.documentElement.scrollTop > 128) {
          mybutton.style.display = 'block'
        } else {
          mybutton.style.display = 'none'
        }
        if (document.body.scrollTop > 128 || document.documentElement.scrollTop > 128) {
          applyBtn.style.display = 'block'
        } else {
          applyBtn.style.display = 'none'
        }
      }

      function topFunction() {
        document.body.scrollTop = 0 // For Safari
        document.documentElement.scrollTop = 0 // For Chrome, Firefox, IE and Opera
      }
    </script>
  </body>
</html>
