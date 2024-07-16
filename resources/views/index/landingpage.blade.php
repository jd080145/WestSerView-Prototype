<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#FFFFFF] h-max">
    <header>
        <!--Navbar-->
    <nav class="bg-[#5c7c89] sticky top-0 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="#" class="flex items-center">
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">WestSerView</span>
            </a>

            <div class="flex md:order-2">
                <!--Drawer Button-->
                <button
                    class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    type="button" data-drawer-target="drawer-right" data-drawer-show="drawer-right"
                    data-drawer-placement="right" aria-controls="drawer-right">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect y="4" width="24" height="2" fill="black"/>
                        <rect y="11" width="24" height="2" fill="black"/>
                        <rect y="18" width="24" height="2" fill="black"/>
                      </svg>
                </button>
                <!--Drawer Button-->
            </div>

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
                    <li><a class="text-sm text-white font-bold hover:text-gray-500" href="#">Home</a></li>
                    <li class="text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                            class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </li>
                    <li><a class="text-sm text-white font-bold hover:text-white" href="#">About Us</a></li>
                    <li class="text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                            class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </li>
                    <li><a class="text-sm text-white font-bold hover:text-gray-500" href="#">Services</a></li>
                    <li class="text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                            class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </li>
                    <li><a class="text-sm text-white font-bold hover:text-gray-500" href="#">Pricing</a></li>
                    <li class="text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                            class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                        </svg>
                    </li>
                    <li><a class="text-sm text-white font-bold hover:text-gray-500" href="#">Contact</a></li>
                </ul>
            </div>
            <a class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-gray-900 font-bold  rounded-xl transition duration-200"
                href="{{route('login')}}">Sign In</a>
            <a class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200"
                href="{{route('register')}}">Sign up</a>
        </div>
    </nav>
    <!--Navbar-->
<!--Drawer Components-->
    <div id="drawer-right"
        class="fixed top-0 right-0 z-40 h-screen p-4 overflow-y-auto transition-transform translate-x-full bg-white w-80 dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-right-label">
        <h5 id="drawer-right-label"
            class="text-center  items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400">
            WESTSERVIEW
        </h5>
        <button type="button" data-drawer-hide="drawer-right" aria-controls="drawer-right"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg  aria-hidden="true" style="height: 20px; width:30px" xmlns="http://www.w3.org/2000/svg"
                fill="none"viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2">
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        About
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        Services
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        Pricing
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        Contact
                    </a>
                </li>

                <hr>
                <div class='pt-3 '>
                    <li class='pt-3 '>

                    <a href="#" class="flex items-center justify-center p-2 text-base font-normal text-gray-900 rounded-lg bg-blue-100 hover:bg-blue-300 text-sm text-dark font-bold rounded-xl transition duration-200 text-center">
                    Sign in
                </a>
                    </li>
                    <li class='pt-3 '>
                        <a href="{{route('register')}}" class="flex items-center justify-center p-2 text-base font-normal text-gray-900 rounded-lg bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200 text-center">
                        Sign up
                    </a>
                    </li>
                </div>
            </ul>
        </div>
    </div>
    <!--Drawer Components-->
</header>

    <main class="p-0 m-0 pt-1m-0">
        <!--Padding div for navbar-->
        <div style="height: 5px;"></div>

        <div class="md:px-20 md:py-5 px-5 py-2 m-0 space-y-5">
            
            <div class="w-full relative text-center hover:text-white text-black shadow-lg border rounded-md border-2 border-white hover:border-blue-400 hover:border-2 border-solid overflow-hidden" style="height: 20vw;">
                <img class="h-full w-full transform object-cover object-center blur blur-sm hover:blur-none" src="{{ URL('images/rooms/example-1.jpeg') }}">
                <p class="absolute inset-0 lg:text-7xl md:text-4xl text-3xl lg:ps-5 lg:pt-15 md:ps-2 md:pt-10 ps-2 pt-5 drop-shadow-xl">Hotel Rooms</p>
            </div>

            <div class="w-full relative text-center hover:text-white text-black shadow-lg border rounded-md border-2 border-white hover:border-blue-400 hover:border-2 border-solid overflow-hidden" style="height: 20vw;">
                <img class="h-full w-full transform object-cover object-center blur blur-sm hover:blur-none" src="{{ URL('images/rooms/example-1.jpeg') }}">
                <p class="absolute inset-0 lg:text-7xl md:text-4xl text-3xl lg:ps-5 lg:pt-15 md:ps-2 md:pt-10 ps-2 pt-5 drop-shadow-xl">Hotel Rooms</p>
            </div>

            <div class="w-full relative text-center hover:text-white text-black shadow-lg border rounded-md border-2 border-white hover:border-blue-400 hover:border-2 border-solid overflow-hidden" style="height: 20vw;">
                <img class="h-full w-full transform object-cover object-center blur blur-sm hover:blur-none" src="{{ URL('images/rooms/example-1.jpeg') }}">
                <p class="absolute inset-0 lg:text-7xl md:text-4xl text-3xl lg:ps-5 lg:pt-15 md:ps-2 md:pt-10 ps-2 pt-5 drop-shadow-xl">Hotel Rooms</p>
            </div>

        </div>
        <div class="container mx-auto p-3">

.
        </div>


    </main>

    <footer class="mt-0 p-2 w-full bg-gray-800 mx-0 pt-5 inset-x-0 bottom-0 ">
        <div class="container d-block mx-auto my-3">
            <p class="text-center text-white">© 2024 WestSerView</p>
        </div>
    </footer>
</body>

</html>
