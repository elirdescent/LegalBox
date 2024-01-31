<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="/images/elaw.png">
    <link rel="stylesheet" href="{{ asset('css/gradient.css') }}">
    <title>Role Selection</title>
    @vite('resources/css/app.css')
</head>

<body class="background-radial-gradient flex items-center justify-center h-screen">

    <!-- Card Section -->
    <div>
        <div class="relative px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 justify-content-space-around">
            <div class="justify-between max-w-lg mx-auto overflow-hidden rounded-lg lg:max-w-none lg:flex sm:flex-row">
                <div class="mb-10 rounded-xl px-6 py-8 text-center bg-white transition-colors duration-300 ease-in-out hover:bg-blue-200 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12 m-2">
                    <h3 class="text-2xl font-extrabold text-gray-900 sm:text-3xl"></h3>
                    <div class="joinus mt-20">
                        <img src="{{URL('images/clientuser.png')}}" alt="lawyers"
                            class="h-64 mx-auto transition duration-300 ease-in-out hover:transform hover:scale-110">
                        <div class="flex items-center justify-center mt-4 text-5xl font-extrabold text-gray-900">
                            <span class="text-cyan-400">Lawyer</span>
                        </div>
                        <div class="mt-6">
                            <div class="rounded-md shadow">
                                <a href="{{URL('login')}}"
                                    class="flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white bg-cyan-800 border border-transparent transition duration-300 ease-in-out rounded-md hover:bg-cyan-400"
                                    target="_blank">Log In</a>
                            </div>
                        </div>
                        <div class="mt-4 text-sm text-gray-900">
                            Log in as a
                            <span class="font-bold text-cyan-400">Lawyer</span>
                        </div>
                    </div>
                </div>

                <div class="mb-10 rounded-xl px-6 py-8 text-center bg-gradient-to-t from-blue-300 to-white lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12 m-2">
                    <h3 class="text-2xl font-extrabold text-cyan-400 sm:text-3xl">Welcome back!</h3>
                    <div class="joinus mt-10">
                        <img src="{{URL('images/admin.png')}}" alt="lawyers"
                            class="h-64 mx-auto transition duration-300 ease-in-out hover:transform hover:scale-110">
                        <div class="flex items-center justify-center mt-4 text-5xl font-extrabold text-gray-900">
                            <!-- Content for Admin section -->
                        </div>
                        <div class="mt-6">
                            <div class="rounded-md shadow">
                                <!-- Content for Admin section -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-10 rounded-xl px-6 py-8 text-center bg-white transition-colors duration-300 ease-in-out hover:bg-blue-200 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12 m-2">
                    <h3 class="text-2xl font-extrabold text-gray-900 sm:text-3xl"></h3>
                    <div class="joinus mt-20">
                        <img src="{{URL('images/lawyers.png')}}" alt="lawyers"
                            class="h-64 mx-auto transition duration-300 ease-in-out hover:transform hover:scale-110">
                        <div class="flex items-center justify-center mt-4 text-5xl font-extrabold text-gray-900">
                            <span class="text-cyan-400">Lawyer Firm</span>
                        </div>
                        <div class="mt-6">
                            <div class="rounded-md shadow">
                                <a href="{{URL('firmlogin')}}"
                                    class="flex items-center justify-center w-full px-5 py-3 text-base font-medium text-white bg-cyan-800 border border-transparent transition duration-300 ease-in-out rounded-md hover:bg-cyan-400"
                                    target="_blank">Log In</a>
                            </div>
                        </div>
                        <div class="mt-4 text-sm text-gray-900">
                            Log in as a
                            <span class="font-bold text-cyan-400">Lawyer Firm</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>
