<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-600 leading-tight">
            Sun Sudan News...
        </h2>
    </x-slot>

    <div class="container p-4 mx-auto space-y-3">
        @foreach ($news as $item)
            <div class="bg-white rounded-md shadow-md max-w-5xl mx-auto">
                <div class="grid grid-cols-2 sm:grid-cols-3">
                    <div class="col-span-2  py-4 px-8">
                        <span class="font-light text-gray-600">{{ date_format($item->created_at, 'd, M Y h:m A') }}</span>
                        <div>
                            <span class="text-2xl text-gray-700 leading-normal font-semibold hover:underline"><a href="{{ route('news.single', $item->slug) }}">{{ $item->title }}</a></span>
                            <br>
                            <p>{!! mb_substr(strip_tags($item->body), 0, 200) !!}{{ strlen(strip_tags($item->body))
                                > 200 ? "..." : "" }}</p>
                            <br>
                            <a href="{{ route('news.single', $item->slug) }}"
                                class="bg-yellow-500 hover:bg-yellow-400 rounded-md transition duration-300 p-2 px-2 text-md text-white float-right">Read
                                more...</a>
                        </div>
                    </div>
                    <div class="hidden sm:flex sm:flex-1">
                        <img class="object-cover rounded-r-md"
                            src="{{ asset('images/' . $item->cover) }}"
                            alt="">
                    </div>

                </div>
            </div>
        @endforeach
        <div class="mt-8 px-2 max-w-5xl mx-auto">
            {{ $news->links() }}
        </div>
    </div>
</x-app-layout>
