<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editing news
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                @endif
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('admin-news.update', $news->id) }}" method="post" enctype="multipart/form-data">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="flex space-x-4 mb-4">
                            <div class="w-full">
                                <x-label for="title" class="text-yellow-600" value="Title" />
                
                                <x-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ $news->title }}" required autofocus />
                            </div>
                            <div class="w-full">
                                <x-label for="slug" class="text-yellow-600" value="Slug" />
                
                                <x-input id="slug" class="block mt-1 w-full" type="text" name="slug" value="{{ $news->slug }}" required autofocus />
                            </div>
                            <div class="w-full">
                                <x-label for="cover" class="text-yellow-600" value="Cover" />
                
                                <x-input id="cover" class="block mt-1 w-full p-2 focus:outline-none focus:ring-yellow-300" type="file" name="cover" autofocus />
                            </div>
                        </div>
                        <textarea id="mytextarea" name="body" rows="15">
                            {!! $news->body !!}
                        </textarea>
                        <div class="mt-4">
                            <x-button class=" bg-yellow-500 hover:bg-yellow-400">
                                Save
                            </x-button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
    @section('script_head')
    <script src='https://cdn.tiny.cloud/1/nx7t84bzj3i043965tbim5yiqiapfukzkz9unvofbbjonxm1/tinymce/5/tinymce.min.js' referrerpolicy="origin">
    </script>
    <script>
      tinymce.init({
        selector: '#mytextarea'
      });
    </script>
    @endsection
</x-app-layout>
