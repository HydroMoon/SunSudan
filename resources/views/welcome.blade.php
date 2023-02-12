<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fav Icon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/holder.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js" defer></script>
    @yield('script_head')
</head>

<body class="antialiased">
    <div class="w-full">
        <div class="flex bg-white h-screen">
            <div class="flex items-center text-center lg:text-left px-8 md:px-12 lg:w-1/2">
                <div>
                    <span class="text-2xl font-semibold text-gray-800 md:text-4xl">⏰ Coming<span
                            class="ml-2 text-yellow-600">Soon</span> ⏰</span>
                    <h1 class="py-5 text-5xl font-semibold text-gray-800 md:text-6xl">Scaling Up Nutrition<span
                            class="ml-2 text-yellow-600">Sudan</span></h1>

                    <p class="mt-2 text-sm text-gray-500 md:text-lg"><a href="#">
                        By 2030, a world free from malnutrition in all its forms. Led by governments, supported by organisations and individuals – collective action ensures every child, adolescent, mother and family can realise their right to food and nutrition, reach their full potential and shape sustainable and prosperous societies.</p>
                    <div class="flex space-x-3 justify-center lg:justify-start mt-6">
                        <a href="#"
                            class="bg-blue-500 px-4 py-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
                            <svg class="w-5 h-5 fill-current" role="img" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                            <span>Facebook</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block lg:w-1/2">
                <div class="h-full object-cover"
                    style="background-image: url(https://web.facebook.com/SUNCivilSocietyAlliancePakistan/photos/a.405591292951133/405619416281654/)">
                    <div class="h-full bg-blue-500 opacity-50"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
