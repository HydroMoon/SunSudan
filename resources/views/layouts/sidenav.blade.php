<div class="container bg-white mx-auto h-full">
    <div class="flex flex-col h-full p-4 space-y-1">
        @if (Auth::check('web'))
            <h3 class="px-4 text-semibold text-md text-gray-700">Admin Panel</h3>
            <a href="{{ route('dashboard') }}" class="text-gray-500 hover:text-white hover:bg-yellow-400 px-4 py-2 rounded-md">Dashboard</a>
            <a href="{{ route('admin-news.index') }}" class="text-gray-500 hover:text-white hover:bg-yellow-400 px-4 py-2 rounded-md">News</a>
            <a href="{{ route('admin.media') }}" class="text-gray-500 hover:text-white hover:bg-yellow-400 px-4 py-2 rounded-md">Media</a>
            <a href="{{ route('admin.event') }}" class="text-gray-500 hover:text-white hover:bg-yellow-400 px-4 py-2 rounded-md">Events</a>
            <a href="{{ route('admin.messages') }}" class="text-gray-500 hover:text-white hover:bg-yellow-400 px-4 py-2 rounded-md">Messages</a>

        @else
            <h3 class="px-4 text-semibold text-md text-gray-700">Sun Network</h3>
            <a href="{{ route('home') }}"
                class="text-gray-500 hover:text-white hover:bg-yellow-400 px-4 py-2 rounded-md">Home</a>
            <a href="{{ route('news') }}"
                class="text-gray-500 hover:text-white hover:bg-yellow-400 px-4 py-2 rounded-md">News</a>
            <a href="{{ route('calendar') }}"
                class="text-gray-500 hover:text-white hover:bg-yellow-400 px-4 py-2 rounded-md">Events</a>
            <a href="{{ route('media') }}" class="text-gray-500 hover:text-white hover:bg-yellow-400 px-4 py-2 rounded-md">Media</a>
            <a href="{{ route('about-us') }}"
                class="text-gray-500 hover:text-white hover:bg-yellow-400 px-4 py-2 rounded-md">About Us</a>
            <a href="{{ route('contact-us') }}"
                class="text-gray-500 hover:text-white hover:bg-yellow-400 px-4 py-2 rounded-md">Contact Us</a>
        @endif
    </div>
</div>
