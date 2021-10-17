<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-600 leading-tight">
            Welcome to Scaling Up Nutrition Sudan
        </h2>
    </x-slot>

    <div class="container p-4 mx-auto space-y-4">
        <div class="max-w-5xl mx-auto bg-white shadow-md rounded-md md:grid md:grid-cols-3">
            <div class="hidden md:flex md:relative">
                <img class="absolute inset-0 w-full h-full object-cover object-center rounded-l-md"
                    src="{{ asset('images/image1.jpg') }}" alt="">
            </div>
            <div class="col-span-2 flex flex-col p-8 md:mx-0 text-gray-700 rounded-md space-y-4 font-mono">
                <h1 class="text-2xl uppercase font-semibold text-yellow-500">Our Vision</h1>
                <p class="text-justify font-open-sans">
                    By 2030, a world free from malnutrition in all its forms. Led by governments, supported by
                    organisations and individuals – collective action ensures every child, adolescent, mother and family
                    can realise their right to food and nutrition, reach their full potential and shape sustainable and
                    prosperous societies.
                </p>
            </div>
        </div>

        <div class="max-w-5xl mx-auto bg-white shadow-md rounded-md md:grid md:grid-cols-3">
            <div class="col-span-2 flex flex-col p-8 md:mx-0 text-gray-700 rounded-md space-y-4 font-mono">
                <h1 class="text-xl uppercase font-semibold text-yellow-500">Bringing people together</h1>
                <p>
                    Sudan has strong mechanisms in place for scaling up nutrition. The established multi-sectoral platform (MSP) for nutrition includes the Higher Council of Food Security and Nutrition, which convenes 13 line ministries, whilst the National Nutrition Programme Office (NNP) of the Ministry of Health is responsible for coordination and reports to the President through the Vice-President and the National Nutrition Committee (NNC). The NCC engages with stakeholders including the private sector, civil society, UN agencies, development partners and academia. Sudan has developed advocacy tools and a decentralisation plan to districts, complemented by district and community-level coordination structures.
                </p>
            </div>
            <div class="hidden md:flex md:relative">
                <img class="absolute inset-0 w-full h-full object-cover object-center rounded-r-md"
                    src="{{ asset('images/image2.jpg') }}" alt="">
            </div>
        </div>
    </div>
</x-app-layout>
