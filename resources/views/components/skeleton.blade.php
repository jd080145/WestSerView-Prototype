<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="h-screen">
    <!-- NavBar-->
    <header>
      <nav class="bg-white dark:bg-gray-900 fixed z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600 shadow-md">
        <div class="p-5 w-full">
          <p class="text-4xl text-center">WESTSERVIEW</p>
        </div>

        <div class="w-screen flex flex-wrap items-center justify-end md:justify-between mx-auto p-4 bg-blue-100">
        
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse pe-5">
            <button type="button" class="text-white  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 mx-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 mx-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Log in</button>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
        </div>
        <div class="items-center justify-center hidden w-full md:ps-10 md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg lg:bg-blue-100 md:bg-blue-100 sm:bg-blue-100 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-blue-100 dark:border-gray-700">
            <li>
              <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-blue-100 md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Home</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-gray-900 rounded md:bg-blue-100 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-gray-900 rounded md:bg-blue-100 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-gray-900 rounded md:bg-blue-100 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
            </li>
          </ul>
        </div>
        </div>
      </nav>
    </header>
    <!-- NavBar-->

    <!--Main-->
    <Main class="p-0 m-0 pt-100 m-0">
      <!--Padding div for navbar--><div style="height:150px;" class=""></div>

      <div class="h-100 w-full bg-cover bg-bottom" style="background-image: url({{ URL ('assets/img/example.jpeg') }}); height: 650px;">
        
      </div>
      
      <div class="bg-gray-200 h-70 border-blue-100 p-3">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Adipiscing elit duis tristique sollicitudin nibh sit amet commodo nulla. Magna ac placerat vestibulum lectus mauris ultrices eros. Cras ornare arcu dui vivamus. Lectus vestibulum mattis ullamcorper velit sed. Interdum varius sit amet mattis vulputate enim nulla aliquet. A iaculis at erat pellentesque adipiscing commodo. Velit euismod in pellentesque massa placerat duis ultricies lacus sed. Enim sit amet venenatis urna cursus eget nunc scelerisque viverra. Egestas erat imperdiet sed euismod nisi porta lorem mollis. Molestie ac feugiat sed lectus vestibulum mattis ullamcorper. Sed faucibus turpis in eu mi bibendum neque egestas congue. Blandit massa enim nec dui nunc mattis.

Nibh praesent tristique magna sit. Dictum sit amet justo donec enim diam vulputate ut pharetra. Tortor at auctor urna nunc. Varius duis at consectetur lorem donec. Feugiat pretium nibh ipsum consequat nisl vel pretium. Elementum nibh tellus molestie nunc non blandit massa enim nec. Egestas integer eget aliquet nibh praesent tristique magna. Nulla aliquet porttitor lacus luctus accumsan. Tristique sollicitudin nibh sit amet. Duis ultricies lacus sed turpis tincidunt id aliquet. Sed vulputate odio ut enim. Vulputate ut pharetra sit amet aliquam id diam maecenas. Hendrerit gravida rutrum quisque non. Dictum sit amet justo donec enim diam. Mi proin sed libero enim sed. Cursus turpis massa tincidunt dui ut ornare lectus sit. Ornare arcu dui vivamus arcu felis bibendum. Adipiscing enim eu turpis egestas pretium aenean pharetra magna. Sit amet aliquam id diam maecenas ultricies mi eget.

Imperdiet sed euismod nisi porta. Nisi vitae suscipit tellus mauris a diam. Consectetur adipiscing elit duis tristique sollicitudin nibh sit amet commodo. Ac tortor dignissim convallis aenean et tortor at risus viverra. Tellus cras adipiscing enim eu. Tincidunt dui ut ornare lectus sit amet est. Faucibus in ornare quam viverra orci sagittis eu volutpat. Adipiscing elit ut aliquam purus sit amet luctus venenatis lectus. Lobortis elementum nibh tellus molestie nunc. Id semper risus in hendrerit gravida rutrum quisque non tellus. Eget magna fermentum iaculis eu non diam.


      </div>
    </Main>
    <!--Main-->

    <!--Footer-->
    <footer class="mt-0 p-2 w-full bg-gray-800 mx-0 pt-5 mt-5 inset-x-0 bottom-0 ">
      <div class="container d-block mx-auto my-3">
          <p class="text-center text-white">© 2024 WestSerView</p>
      </div>
    </footer>
    <!--Footer-->

</body>
</html>