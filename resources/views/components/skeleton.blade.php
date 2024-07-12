<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-blue-500">
    <header class="">


        <nav class="bg-white border-gray-200 dark:bg-gray-900 fix">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
                <a href="https://flowbite.com" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('images/391614860_122109013400070830_2130971772459719981_n.jpg') }}"
                        class="h-8" alt="Flowbite Logo" />
                    <span
                        class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">WestSerView</span>
                </a>
                <div class="flex items-center space-x-6 rtl:space-x-reverse">
                    <a href="tel:5541251234" class="text-sm  text-gray-500 dark:text-white hover:underline">(555)
                        412-1234</a>
                    <a href="{{route('login')}}" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline">Login</a>
                </div>
            </div>
        </nav>
    </header>
        <nav class="bg-gray-50 dark:bg-gray-700 sticky top-0 z-50">
            <div class="max-w-screen-xl px-5 py-3 mx-auto">
                <div class="flex items-center">
                    <ul class="flex flex-row font-medium mt-0 space-x-8 rtl:space-x-reverse text-sm">
                        <li>
                            <a href="#" class="text-xl text-gray-900 dark:text-white hover:underline"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#" class="text-xl text-gray-900 dark:text-white hover:underline">Company</a>
                        </li>
                        <li>
                            <a href="#" class="text-xl text-gray-900 dark:text-white hover:underline">Team</a>
                        </li>
                        <li>
                            <a href="#" class="text-xl text-gray-900 dark:text-white hover:underline">Features</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



   

    <main>
        {{ $slot }}
    </main>
</body>

</html>







