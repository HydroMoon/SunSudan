<x-app-layout>
    @section('script_head')
        <link rel="stylesheet" href="{{ asset('css/simple-lightbox.min.css') }}">
        <script src="{{ asset('js/simple-lightbox.min.js') }}"></script>
    @endsection
    <x-slot name="header">
        <h2 class="font-semibold text-lg text-gray-600 leading-tight">
            See our photos gallery...
        </h2>
    </x-slot>

    <div class="container p-4 mt-3 mx-auto">
        <div class="max-w-5xl mx-auto flex items-center justify-center">
            <div class="gallery grid grid-cols-3 h-full bg-white shadow-lg">
                @foreach ($media as $item)
                <a class="overflow-hidden" href="{{ asset('images/' . $item->file_name) }}"><img class="object-cover hover:scale-110 transform transition duration-300"
                    width="400" height="600" src="{{ asset('images/thumbs/' . 'tn' . $item->file_name) }}" alt="" title="{{ $item->title }}" /></a>
                    @endforeach
            </div>
        </div>
    </div>
    @section('script')
        <script>
            var lightbox = new SimpleLightbox('.gallery a', {
                /* options */ });
        </script>
    @endsection
</x-app-layout>
