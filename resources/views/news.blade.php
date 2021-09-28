<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-600 leading-tight">
            Enjoy the latest news directly from the source...
        </h2>
    </x-slot>

    <div class="container p-4 mx-auto space-y-3">
        @for ($i = 0; $i < 3; $i++) 
        <div class="bg-white rounded-md shadow-md max-w-5xl mx-auto">
            <div class="grid grid-cols-2 sm:grid-cols-3">
                <div class="col-span-2  py-4 px-8">
                    <span class="font-light text-gray-600">Jun 1, 2020</span>
                    <div>
                        <span class="text-2xl text-gray-700 leading-normal font-semibold hover:underline">Check us at
                            7-eleven now...</span>
                        <br>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci nihil autem sapiente eum,
                            sequi aliquam? Id accusantium ipsa nostrum tempore sint a deleniti quae velit earum
                            distinctio,
                            rem, rerum nisi.</p>
                        <br>
                        <a href="#"
                            class="bg-yellow-300 hover:bg-yellow-400 rounded-md transition duration-300 p-2 px-2 text-md text-white float-right">Read
                            more...</a>
                    </div>
                </div>
                <div class="hidden sm:flex sm:flex-1">

                    <img class="object-cover rounded-r-md"
                        src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&ixqx=4ciQ7zshM1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                        alt="">
                </div>

            </div>
    </div>
    @endfor
    <div class="mt-8 max-w-5xl mx-auto">
        <div class="flex justify-center">
            <a href="#" class="px-3 py-2 mx-1 font-medium text-gray-500 bg-white rounded-md">
                previous
            </a>

            <a href="#"
                class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-yellow-400 hover:text-white">
                1
            </a>

            <a href="#"
                class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-yellow-400 hover:text-white">
                2
            </a>

            <a href="#"
                class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-yellow-400 hover:text-white">
                3
            </a>

            <a href="#"
                class="px-3 py-2 mx-1 font-medium text-gray-700 bg-white rounded-md hover:bg-yellow-400 hover:text-white">
                Next
            </a>
        </div>
    </div>
    </div>
</x-app-layout>
