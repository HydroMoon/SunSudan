<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-600 leading-tight">
            This is what we doing at our facility.
        </h2>
    </x-slot>

    <div class="container p-4 mx-auto">
        <div class="bg-white rounded-md shadow-md max-w-5xl mx-auto md:grid md:grid-cols-2">
            <div class="hidden md:flex md:relative">
                <img class="absolute inset-0 w-full h-full object-cover object-center rounded-l-md"
                        src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&ixqx=4ciQ7zshM1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                        alt="">
            </div>
            <div class="flex flex-col items-start px-8 py-8 space-y-3">
                <span class="text-gray-700 text-3xl">Company example name</span>
                <span class="font-light text-gray-600">Caring is sharing</span>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi, modi praesentium. Tempore placeat sequi molestiae ea natus, aspernatur deleniti quidem quo necessitatibus quos suscipit soluta, provident atque dicta tempora ad!</p>
                <a href="{{ route('contact-us') }}" class="bg-yellow-300 hover:bg-yellow-400 rounded-md py-2 px-5 text-white">Contact Us</a>
            </div>
        </div>
    </div>
</x-app-layout>