<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            News
        </h2>
    </x-slot>

    <div class="py-12">
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
                                Title</th>
                            <th
                                class="px-6 bg-gray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Content</th>
                            <th
                                class="px-6 bg-gray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Date</th>
                            <th
                                class="px-6 bg-gray-50 text-gray-500 align-middle border border-solid border-gray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                <a class="px-2 py-1 text-green-500 border-2 border-green-500 hover:bg-green-500 hover:text-white rounded-md block text-center" href="{{ route('admin-news.create') }}">Create</a>
                            </th>
                        </thead>
                        <tbody>
                            @foreach ($news as $key => $item)
                                <tr class="text-gray-500">
                                    <td
                                        class="px-6 text-gray-700 align-middle py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        {{ $key + 1 }}</td>
                                    <td
                                        class="px-6 text-gray-700 align-middle py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        {{ $item->title }}</td>
                                    <td
                                        class="px-6 text-gray-700 align-middle py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        {{ mb_substr(strip_tags($item->body), 0, 25) }}{{ strlen(strip_tags($item->body)) > 25 ? '...' : '' }}
                                    </td>
                                    <td
                                        class="px-6 text-gray-700 align-middle py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        {{ $item->created_at }}</td>
                                    <td
                                        class="px-6 align-middle py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        <div class="flex">
                                            <a href="{{ route('admin-news.edit', $item->id) }}"
                                                class="text-yellow-200 hover:text-yellow-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </a>
                                            <form action="{{ route('admin-news.destroy', $item->id) }}" method="POST">
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
    </div>
</x-app-layout>
