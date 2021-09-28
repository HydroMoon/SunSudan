<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-600 leading-tight">
            Reach for us for any questions...
        </h2>
    </x-slot>

    <div class="container p-4 mx-auto">
        <div class="bg-white rounded-md shadow-md max-w-5xl mx-auto md:grid md:grid-cols-2">
            <div class="hidden md:flex md:relative">
                <img class="absolute inset-0 w-full h-full object-cover object-center rounded-l-md"
                        src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&ixqx=4ciQ7zshM1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80"
                        alt="">
            </div>
            <div class="flex flex-col px-8 py-6 space-y-3">
                <span class="text-gray-700 text-3xl">Contact Us</span>
                <form action="" method="post" class="space-y-3">
                    <div>
                        <x-label for="name" class="text-yellow-600" value="Name" />
        
                        <x-input id="name" class="w-full" type="text" name="name" placeholder="Name"  required autofocus />
                    </div>
                    <div>
                        <x-label for="email" class="text-yellow-600" value="Email" />
        
                        <x-input id="email" class="w-full" type="email" name="email" placeholder="E-mail"  required autofocus />
                    </div>
                    <div>
                        <x-label for="email" class="text-yellow-600" value="Message" />

                        <textarea name="message" class="w-full rounded-md shadow-sm border-gray-300 focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50" cols="30" rows="3"></textarea>
                    </div>
                    <div>
                        <a href="#" class="bg-yellow-300 hover:bg-yellow-400 rounded-md py-2 px-5 text-white">Contact Us</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>