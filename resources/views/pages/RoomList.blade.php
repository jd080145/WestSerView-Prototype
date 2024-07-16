<x-skeleton>
    <div class="bg-gray-700 p-4 px-10 mt-2">
        <p class="text-white text-3xl">Rooms</p>
    </div>
    <div class="grid md:grid-cols-3 grid-cols-1 p-3 md:px-10 px-5">
        
        <div class="mx-2 my-2 p-3 bg-white relative hover:drop-shadow-xl border-solid">
            <a href="{{route('rooms')}}">
                <div class="border border-2 border-white border-solid hover:border-blue-400">
                    <img class="h-full w-full" src="{{ URL('images/rooms/example-1.jpeg') }}">
                </div>
                <div class="px-5 py-2 bg-white relative" style="height: 5rem;">
                    <p class="absolute left-0 top-0 text-black text-2xl font-bold">Hotel Room 1</p>
                    <p class="absolute right-0 top-0 text-black text-3xl font-bold">Price</p>
                    <p class="absolute left-0 bottom-0 text-black">ADADADADADADADADADAD</p>
                </div>
            </a>
        </div>

        <div class="mx-2 my-2 p-3 bg-white relative hover:drop-shadow-xl border-solid">
            <a href="{{route('rooms')}}">
                <div class="border border-2 border-white border-solid hover:border-blue-400">
                    <img class="h-full w-full" src="{{ URL('images/rooms/example-1.jpeg') }}">
                </div>
                <div class="px-5 py-2 bg-white relative" style="height: 5rem;">
                    <p class="absolute left-0 top-0 text-black text-2xl font-bold">Hotel Room 1</p>
                    <p class="absolute right-0 top-0 text-black text-3xl font-bold">Price</p>
                    <p class="absolute left-0 bottom-0 text-black">ADADADADADADADADADAD</p>
                </div>
            </a>
        </div>

        <div class="mx-2 my-2 p-3 bg-white relative hover:drop-shadow-xl border-solid">
            <a href="{{route('rooms')}}">
                <div class="border border-2 border-white border-solid hover:border-blue-400">
                    <img class="h-full w-full" src="{{ URL('images/rooms/example-1.jpeg') }}">
                </div>
                <div class="px-5 py-2 bg-white relative" style="height: 5rem;">
                    <p class="absolute left-0 top-0 text-black text-2xl font-bold">Hotel Room 1</p>
                    <p class="absolute right-0 top-0 text-black text-3xl font-bold">Price</p>
                    <p class="absolute left-0 bottom-0 text-black">ADADADADADADADADADAD</p>
                </div>
            </a>
        </div>
        
    </div>
</x-skeleton>