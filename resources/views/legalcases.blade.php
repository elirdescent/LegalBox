<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cases</title>
    <link rel="stylesheet" href="{{asset('css/gradient.css')}}">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
     @vite('resources/css/app.css')


   
</head>
<body class>

    <!-- component -->

<div class="md:flex flex-col md:flex-row md:min-h-screen w-full">
  <div @click.away="open = false" class="flex flex-col  rounded-r-sm  lg:rounded-r-lg w-full md:w-64 text-gray-700 bg-neutral-900 flex-shrink-0" x-data="{ open: false }">
    <div class="flex-shrink-0 px-8 py-4  flex flex-row items-center justify-between lg:justify-center">
        <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"><img src="{{URL('images/elaw.png')}}" alt="" class="h-10"></a>
      <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline"><img src="{{URL('images/legalboxteal.png')}}" alt="" class="h-10"></a>
      <button class="rounded-lg md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6 text-cyan-400">
          <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
        </svg>
      </button>
    </div>
    <nav :class="{'block': open, 'hidden': !open}" class=" flex-grow md:block px-4 pb-4 md:pb-0 md:overflow-y-auto">
      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-white bg-neutral transition ease-in-out duration-400 rounded-lg hover:text-cyan-400 focus:text-cyan-600 focus:outline-none focus:shadow-outline hover:shadow-lg" href="#">Blog</a>
      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-400 hover:bg-cyan-400 hover:text-neutral hover:shadow-lg transition ease-in-out duration-400 rounded-lg focus:outline-none focus:shadow-outline focus:bg-cyan-500" href="#">Portfolio</a>
      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-400 bg-transparent   hover:bg-cyan-400 hover:shadow-lg transition ease-in-out duration-400 hover:text-neutral rounded-lg focus:outline-none focus:shadow-outline focus:bg-cyan-500" href="#">About</a>
      <a class="block px-4 py-2 mt-2 text-sm font-semibold text-gray-400 hover:text-neutral bg-transparent   hover:bg-cyan-400 hover:shadow-lg transition ease-in-out duration-400 rounded-lg focus:outline-none focus:shadow-outline focus:bg-cyan-500" href="#">Contact</a>
     
    </nav>
  </div>
  <!-- component -->

   

    <!-- component -->
    <section class="container mx-auto p-6 ">
         <!-- Search Bar -->
        <div class="bg-neutral-900 rounded-lg border-none p-3 mb-4 shadow-md">
            <div class="flex items-center">
                <i class="px-3 fas fa-search ml-1"></i>
                <input type="text" placeholder="Search..." class="ml-3 focus:outline-none w-full bg-neutral-900">
            </div>
        </div>

        <div class="mb-2 flex justify-start items-center">
    </div>
        <div class="w-full mb-8 overflow-hidden rounded-lg ">
          <div class="w-full overflow-x-auto">
            
            


                <!-- Contenedor Principal -->
        <div class="lg:flex gap-4 items-stretch bg-neutral-900 ">
            <!-- Caja Grande -->
            <div class="bg-neutral-900 md:p-2 p-6 rounded-lg  mb-4 lg:mb-0  lg:w-[35%] ">
                <div class="flex justify-center items-center space-x-5 h-full">
                    <div>
                        <p>Saldo actual</p>
                        <h2 class="text-4xl font-bold text-gray-600">50.365</h2>
                        <p>25.365 $</p>
                    </div>
                    <img src="https://www.emprenderconactitud.com/img/Wallet.png" alt="wallet"
                        class="h-24 md:h-20 w-38">
                </div>
            </div>

            <!-- Caja Blanca -->
            <div class=" p-4 bg-neutral-900 rounded-lg xs:mb-4 max-w-full shadow-md lg:w-[65%]">
                <!-- Cajas pequeñas -->
                <div class="flex flex-wrap justify-between h-full">
                    <!-- Card 1 -->
                    <div
                        class="flex-1 bg-gradient-to-r from-cyan-700 to-cyan-900 rounded-lg flex flex-col items-center justify-center p-4 space-y-2  m-2">
                        <i class="fas fa-hand-holding-usd text-white text-4xl"></i>
                        <p class="text-white">Depositar</p>
                    </div>

                    <!-- Card 2 -->
                    <div
                        class="flex-1 bg-gradient-to-r from-cyan-700 to-cyan-900 rounded-lg flex flex-col items-center justify-center p-4 space-y-2  m-2">
                        <i class="fas fa-exchange-alt text-white text-4xl"></i>
                        <p class="text-white">Transferir</p>
                    </div>

                    <!-- Card 3 -->
                    <div
                        class="flex-1 bg-gradient-to-r from-cyan-700 to-cyan-900 rounded-lg flex flex-col items-center justify-center p-4 space-y-2  m-2">
                        <i class="fas fa-qrcode text-white text-4xl"></i>
                        <p class="text-white">Canjear</p>
                    </div>
                </div>
            </div>
        </div>

          </div>
        </div>
        
      </section>
</div>    
</body>
</html>