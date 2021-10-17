<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Add events...
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto flex items-center justify-center sm:px-6 lg:px-8">
            <form action="{{ route('admin.event.store') }}" method="post">
                {{ csrf_field() }}
                <div class="flex space-x-4 mb-4 items-center">
                    <div class="w-full">
                        <x-label for="title" class="text-yellow-600" value="Title" />

                        <x-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus />
                    </div>
                    <div class="w-full">
                        <x-label for="start" class="text-yellow-600" value="Start date"/>

                        <x-input id="start" class="block mt-1 w-full" type="date" name="start" required autofocus />
                    </div>
                    <div class="w-full">
                        <x-label for="end" class="text-yellow-600" value="End date" />

                        <x-input id="end" class="block mt-1 w-full" type="date" name="end" autofocus />
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
                                Event title</th>
                            <th
                                class="px-6 bg-gray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Start date</th>
                            <th
                                class="px-6 bg-gray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                End date</th>
                            <th
                                class="px-6 bg-gray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($event as $key => $item)
                                <tr class="text-gray-500">
                                    <td
                                        class="px-6 text-gray-700 align-middle py-3 text-sm border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        {{ $key + 1 }}</td>
                                    <td
                                        class="px-6 text-gray-700 align-middle py-3 text-sm border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        {{ $item->title }}</td>
                                    <td
                                        class="px-6 text-gray-700 align-middle py-3 text-sm border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        {{ $item->start }}</td>
                                    <td
                                        class="px-6 text-gray-700 align-middle py-3 text-sm border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        {{ $item->end }}</td>
                                    <td
                                        class="px-6 align-middle py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        <div class="flex">
                                            <form action="{{ route('admin.event.destroy', $item->id) }}"
                                                method="POST">
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
