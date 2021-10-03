<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-center text-gray-600 leading-tight">
            {{ $news->title }}
        </h2>
    </x-slot>

    <div class="container p-4 mx-auto overflow-auto">
        <div class="bg-white rounded-md shadow-md mx-auto max-w-5xl">
            <div class="bg-gray-50 border-b flex justify-between items-center">
                <div class="px-8 py-2 text-gray-700">
                    <span class="font-semibold">By </span>Qasim Nouh
                </div>
                <div class="px-8 py-2 text-gray-700">
                    Created on: {{  date_format($news->created_at, 'd, M Y h:m A')  }}
                </div>
            </div>
            <div class="px-8 py-2 box-content">
                <img class="rounded-md ml-4 mb-2 float-right object-cover h-32 w-1/3" src="{{ asset('images/' . $news->cover) }}" alt="">
                <p class="leading-relaxed text-lg text-justify text-gray-800">
                    {!! $news->body !!}
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
