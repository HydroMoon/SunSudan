<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Media
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto flex items-center justify-center sm:px-6 lg:px-8">
            <form action="{{ route('admin.media.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="flex space-x-4 mb-4 items-center">
                    <div class="w-full">
                        <x-label for="title" class="text-yellow-600" value="Title" />

                        <x-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')"
                            required autofocus />
                    </div>
                    <div class="w-full">
                        <x-label for="album" class="text-yellow-600" value="Album" />

                        <x-input id="album" class="block mt-1 w-full" type="text" name="album" :value="old('album')"
                            required autofocus />
                    </div>
                    <div class="w-full">
                        <x-label for="image" class="text-yellow-600" value="Image" />

                        <x-input id="image" class="block mt-1 w-full p-2 focus:outline-none focus:ring-yellow-300"
                            type="file" name="file_name" required autofocus />
                    </div>
                    <x-button class="bg-yellow-500 hover:bg-yellow-400">
                        Save
                    </x-button>
                </div>
            </form>
        </div>
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="bg-white border-gray-200 w-full overflow-x-auto lg:overflow-visible">
                    <table class="items-center bg-transparent w-full text-gray-400 space-y-6">
                        <thead class="text-gray-500">
                            <th
                                class="px-6 bg-gray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                #</th>
                            <th
                                class="px-6 bg-gray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                File Name</th>
                            <th
                                class="px-6 bg-gray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Title</th>
                                <th
                                class="px-6 bg-gray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Image</th>
                                <th
                                class="px-6 bg-gray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                </th>
                        </thead>
                        <tbody>
                            @foreach ($media as $key => $item)
                                <tr class="text-gray-500">
                                    <td
                                        class="px-6 text-gray-700 align-middle py-3 text-sm border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    {{ $key + 1 }}</td>
                                    <td
                                        class="px-6 text-gray-700 align-middle py-3 text-sm border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    {{ $item->file_name }}</td>
                                    <td
                                        class="px-6 text-gray-700 align-middle py-3 text-sm border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    {{ $item->title }}</td>
                                    <td
                                        class="px-6 text-gray-700 align-middle py-3 text-sm border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        <img width="128" height="128" src="{{ asset('images/thumbs/' . 'tn' . $item->file_name) }}" alt="">
                                    </td>
                                    <td
                                        class="px-6 align-middle py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        <div class="flex">
                                            <form action="{{ route('admin.media.destroy', $item->id) }}" method="POST">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button class="text-red-200 hover:text-red-500" type="submit">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mt-8 px-8 max-w-5xl mx-auto">

        </div>
    </div>
</x-app-layout>
