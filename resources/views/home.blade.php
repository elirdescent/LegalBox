<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>
<body class="background-radial-gradient">

    <!-- Section: Design Block -->
<section class=" mb-10 overflow-hidden">
  <style>
  .background-radial-gradient {
    background-color: hsl(180, 41%, 15%);
    background-image: radial-gradient(650px circle at 0% 0%,
        hsl(180, 41%, 35%) 15%,
        hsl(180, 41%, 30%) 35%,
        hsl(180, 41%, 20%) 75%,
        hsl(180, 41%, 19%) 80%,
        transparent 100%),
    radial-gradient(1250px circle at 100% 100%,
        hsl(180, 41%, 45%) 15%,
        hsl(180, 41%, 30%) 35%,
        hsl(180, 41%, 20%) 75%,
        hsl(180, 41%, 19%) 80%,
        transparent 100%);
}

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient( #00a3a9, #006770);
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#00a3a9, #006770);
      overflow: hidden;
    }
  </style>
  <!-- Navbar -->
  <nav
    class="relative flex w-full items-center justify-between bg-white py-2 shadow-sm shadow-neutral-700/10 dark:bg-neutral-800 dark:shadow-black/30  lg:flex-wrap lg:justify-start"
    data-te-navbar-ref>
    <!-- Container wrapper -->
    <div class="flex w-full flex-wrap items-center justify-between px-6">
      <div class="flex items-center">
        <!-- Toggle button -->
        <button
          class="block border-0 bg-transparent py-2 pr-2.5 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
          type="button" data-te-collapse-init data-te-target="#navbarSupportedContentY"
          aria-controls="navbarSupportedContentY" aria-expanded="false" aria-label="Toggle navigation">
          <span class="[&>svg]:w-7">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
              <path fill-rule="evenodd"
                d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
                clip-rule="evenodd" />
            </svg>
          </span>
        </button>

        <!-- Navbar Brand -->
        <a class="text-primary dark:text-primary-400" href="#!">
          <span class="[&>svg]:ml-2 [&>svg]:mr-3 [&>svg]:h-6 [&>svg]:w-6 [&>svg]:lg:ml-0">
           <img src="{{URL('images/elaw.png')}}" alt="" class="h-10 w-10">
          </span>
        </a>
      </div>

      <!-- Collapsible wrapper -->
      <div class="!visible hidden flex-grow basis-[100%] items-center lg:!flex lg:basis-auto"
        id="navbarSupportedContentY" data-te-collapse-item>
        <!-- Left links -->
        <ul class="mr-auto lg:flex lg:flex-row" data-te-navbar-nav-ref>
          <li data-te-nav-item-ref>
            <a class="block py-2 pr-2 text-neutral-500 transition duration-150 ease-in-out hover:text-neutral-600 focus:text-neutral-600 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 dark:disabled:text-white/30 lg:px-2 [&.active]:text-black/80 dark:[&.active]:text-white/80"
              href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light"
              disabled>Dashboard</a>
          </li>
          <li data-te-nav-item-ref>
            <a class="block py-2 pr-2 text-neutral-500 transition duration-150 ease-in-out hover:text-neutral-600 focus:text-neutral-600 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 dark:disabled:text-white/30 lg:px-2 [&.active]:text-black/80 dark:[&.active]:text-white/80"
              href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Team</a>
          </li>
          <li class="mb-2 lg:mb-0" data-te-nav-item-ref>
            <a class="block py-2 pr-2 text-neutral-500 transition duration-150 ease-in-out hover:text-neutral-600 focus:text-neutral-600 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-300 dark:focus:text-neutral-300 dark:disabled:text-white/30 lg:px-2 [&.active]:text-black/80 dark:[&.active]:text-white/80"
              href="#!" data-te-nav-link-ref data-te-ripple-init data-te-ripple-color="light">Projects</a>
          </li>
        </ul>
        <!-- Left links -->
      </div>
      <!-- Collapsible wrapper -->

      <!-- Right elements -->
      <div class="my-1 flex items-center lg:my-0 lg:ml-auto">
        <button type="button"
          class="mr-2 inline-block rounded px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:bg-neutral-500 hover:bg-opacity-10 hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 dark:text-cyan-400 dark:hover:bg-neutral-700 dark:hover:bg-opacity-60 dark:hover:text-primary-500 dark:focus:text-primary-500 dark:active:text-primary-60"
          data-te-ripple-init data-te-ripple-color="light">
          Login
        </button>
        <button type="button"
          class="inline-block rounded bg-cyan-400 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg- active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
          data-te-ripple-init data-te-ripple-color="light">
          Sign up for free
        </button>
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->

  <!-- Jumbotron -->
  <div class=" text-center md:px-12 lg:py-24 lg:text-left">
    <div class="w-100 mx-auto text-neutral-800 sm:max-w-2xl md:max-w-3xl lg:max-w-5xl xl:max-w-7xl">
      <div class="grid items-center gap-12 lg:grid-cols-2">
        <div class="mt-12 lg:mt-0" style="z-index: 10">
          
          <h1
            class="mt-0 mb-12 text-5xl font-bold tracking-tight md:text-6xl xl:text-7xl text-[hsl(218,81%,95%)]">
            <img src="{{URL('images/legalboxteal.png')}}" alt="" class="h-20 ">
            Your legal case, <br /><span class="text-cyan-400">our expertise</span>
          </h1>
          <p class="opacity-70 text-sky-50">
            Introducing LegalBox, a cutting-edge web application designed for legal professionals seeking unparalleled case and client management. Streamline your legal practice with intuitive features that empower you to effortlessly organize and track legal cases.
          </p>
        </div>
        <div class="relative mb-12 lg:mb-0">
          <div id="radius-shape-1" class="absolute rounded-full shadow-lg"></div>
          <div id="radius-shape-2" class="absolute shadow-lg"></div>
          <div
            class="relative bg-[hsla(0,0%,100%,0.9)] backdrop-blur-[25px] backdrop-saturate-[200%] block rounded-lg px-6 py-12 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-[hsla(0,0%,15%,0.9)] dark:shadow-black/20 md:px-12">
            <form>
              <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative mb-6" data-te-input-wrapper-init>
                  <input type="text"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="exampleFormControlInput1" placeholder="First name" />
                  <label for="exampleFormControlInput1"
                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">First
                    name
                  </label>
                </div>
                <div class="relative mb-6" data-te-input-wrapper-init>
                  <input type="text"
                    class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                    id="exampleFormControlInput2" placeholder="Last name" />
                  <label for="exampleFormControlInput2"
                    class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Last
                    name
                  </label>
                </div>
              </div>
              <div class="relative mb-6" data-te-input-wrapper-init>
                <input type="email"
                  class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                  id="exampleFormControlInput3" placeholder="Email address" />
                <label for="exampleFormControlInput3"
                  class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Email
                  address
                </label>
              </div>
              <div class="relative mb-6" data-te-input-wrapper-init>
                <input type="password"
                  class="peer block min-h-[auto] w-full rounded border-0 bg-transparent py-[0.32rem] px-3 leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:text-neutral-200 dark:placeholder:text-neutral-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0"
                  id="exampleFormControlInput4" placeholder="Password" />
                <label for="exampleFormControlInput4"
                  class="pointer-events-none absolute top-0 left-3 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-neutral-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-neutral-200 dark:peer-focus:text-primary">Password
                </label>
              </div>
              <div class="mb-6 flex min-h-[1.5rem] justify-center pl-[1.5rem]">
                <input
                  class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent dark:border-neutral-600 dark:checked:border-primary dark:checked:bg-primary dark:focus:before:shadow-[0px_0px_0px_13px_rgba(255,255,255,0.4)] dark:checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca]"
                  type="checkbox" value="" id="flexCheckChecked" checked />
                <label class="inline-block pl-[0.15rem] hover:cursor-pointer dark:text-neutral-50"
                  for="flexCheckChecked">
                  Subscribe to our newsletter
                </label>
              </div>
              <button type="button" data-te-ripple-init data-te-ripple-color="light"
                class="mb-6 inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                Sign up
              </button>
              <div class="text-center">
                <p class="mb-6 dark:text-neutral-50">
                  or sign up with:
                </p>
              </div>
              <div class="flex justify-center">
                <a href="#!" role="button"
                  class="action:text-primary-700 dark:action:text-primary-600 text-primary transition duration-200 ease-in-out hover:text-primary-600 focus:text-primary-600 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500">
                  <!-- Facebook -->
                  <span class="[&>svg]:mx-4 [&>svg]:h-4 [&>svg]:w-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                      </svg>
                  </span>
                </a>
                <a href="#!" role="button"
                  class="action:text-primary-700 dark:action:text-primary-600 text-primary transition duration-200 ease-in-out hover:text-primary-600 focus:text-primary-600 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500">
                  <!-- Google -->
                  <span class="[&>svg]:mx-4 [&>svg]:h-4 [&>svg]:w-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                      <!--! Font Awesome Pro 6.0.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                      <path fill="currentColor"
                        d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                    </svg>
                  </span>
                </a>
                <a href="#!" role="button"
                  class="action:text-primary-700 dark:action:text-primary-600 text-primary transition duration-200 ease-in-out hover:text-primary-600 focus:text-primary-600 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500">
                  <!-- Twitter -->
                  <span class="[&>svg]:mx-4 [&>svg]:h-4 [&>svg]:w-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                      </svg>
                  </span>
                </a>
                <a href="#!" role="button"
                  class="action:text-primary-700 dark:action:text-primary-600 text-primary transition duration-200 ease-in-out hover:text-primary-600 focus:text-primary-600 dark:text-primary-400 dark:hover:text-primary-500 dark:focus:text-primary-500">
                  <!-- Github -->
                  <span class="[&>svg]:mx-4 [&>svg]:h-4 [&>svg]:w-4">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                      <path
                        d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
                      </svg>
                  </span>
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Jumbotron -->
</section>

<div class="container my-12 mx-auto  mt-0">
  <!-- Features Blockk -->
  <section class="mb-32">
    <style>
      
    </style>

    <div class=" text-center text-white lg:h-[400px] h-[300px] lg:pt-[80px] pt-[55px]">
      <h2 class="mb-12 text-cyan-400 text-center text-4xl font-bold">Features</h2>
    </div>

    <div class="grid px-6 md:px-12 lg:grid-cols-3 xl:px-32" style="margin-top: -200px">
      <div class="p-0 py-12">
        <div
          class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 lg:rounded-tr-none lg:rounded-br-none">
          <div class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
            <p class="mb-4 text-sm uppercase">
              <strong>Basic</strong>
            </p>
            <h3 class="mb-6 text-3xl">
              <strong>$ 129</strong>
              <small class="text-base text-neutral-500 dark:text-neutral-300">/year</small>
            </h3>

            <button type="button"
              class="inline-block w-full rounded bg-primary-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
              data-te-ripple-init data-te-ripple-color="light">
              Buy
            </button>
          </div>
          <div class="p-6">
            <ol class="list-inside">
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Unlimited
                updates
              </li>
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Git
                repository
              </li>
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>npm
                installation
              </li>
            </ol>
          </div>
        </div>
      </div>

      <div>
        <div
          class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700"
          style="z-index: 1">
          <div class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
            <p class="mb-4 text-sm uppercase">
              <strong>Enterprise</strong>
            </p>
            <h3 class="mb-6 text-3xl">
              <strong>$ 499</strong>
              <small class="text-base text-neutral-500 dark:text-neutral-300">/year</small>
            </h3>

            <button type="button"
              class="inline-block w-full rounded bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
              data-te-ripple-init data-te-ripple-color="light">
              Buy
            </button>
          </div>
          <div class="p-6">
            <ol class="list-inside">
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Unlimited
                updates
              </li>
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Git
                repository
              </li>
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>npm
                installation
              </li>
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Code examples
              </li>
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Premium
                snippets
              </li>
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Premium
                support
              </li>
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Drag&amp;Drop
                builder
              </li>
            </ol>
          </div>
        </div>
      </div>

      <div class="py-12">
        <div
          class="block h-full rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 lg:rounded-tl-none lg:rounded-bl-none">
          <div class="border-b-2 border-neutral-100 border-opacity-100 p-6 text-center dark:border-opacity-10">
            <p class="mb-4 text-sm uppercase">
              <strong>Advanced</strong>
            </p>
            <h3 class="mb-6 text-3xl">
              <strong>$ 299</strong>
              <small class="text-base text-neutral-500 dark:text-neutral-300">/year</small>
            </h3>

            <button type="button"
              class="inline-block w-full rounded bg-primary-100 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-primary-700 transition duration-150 ease-in-out hover:bg-primary-accent-100 focus:bg-primary-accent-100 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
              data-te-ripple-init data-te-ripple-color="light">
              Buy
            </button>
          </div>
          <div class="p-6">
            <ol class="list-inside">
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Unlimited
                updates
              </li>
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Git
                repository
              </li>
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>npm
                installation
              </li>
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Code examples
              </li>
              <li class="mb-4 flex">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                  stroke="currentColor" class="mr-3 h-5 w-5 text-primary dark:text-primary-400">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" /></svg>Premium
                snippets
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->
</div>
<!-- Footer -->
<footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
  <nav class="grid grid-flow-col gap-4">
    <a class="link link-hover">About us</a>
    <a class="link link-hover">Contact</a>
    <a class="link link-hover">Jobs</a>
    <a class="link link-hover">Press kit</a>
  </nav> 
  <aside>
    <p>Copyright © 2024 - All right reserved by LegalBox</p>
  </aside>
</footer>
<!-- Section: Design Block -->
    
</body>
</html>