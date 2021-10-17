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
                    src="{{ asset('images/image1.jpg') }}" alt="">
            </div>
            <div class="flex flex-col items-start px-8 py-8 space-y-3">
                <span class="text-gray-700 text-3xl">Scaling Up Nutrition Sudan</span>
                <span class="font-light text-gray-600">Vision and principles</span>
                <p>Since 2010, the SUN Movement has inspired a new way of working collaboratively to end malnutrition,
                    in all its forms. With the governments of SUN Countries in the lead, it unites people—from civil
                    society, the United Nations, donors, businesses and researchers—in a collective effort to improve
                    nutrition.
                    </p>
                    <p>The SUN Movement Strategy and Roadmap (2016-2020) has helped illuminate the importance of nutrition
                        as a universal agenda – and one which is integral to achieving the promise of the Sustainable
                        Development Goals (SDGs).</p>
                <a href="{{ route('contact-us') }}"
                    class="bg-yellow-500 hover:bg-yellow-400 rounded-md py-2 px-5 text-white">Contact Us</a>
            </div>
        </div>
    </div>
</x-app-layout>
