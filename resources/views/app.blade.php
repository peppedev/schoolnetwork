<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        {{-- Styles --}}
        <link rel="stylesheet" href="{{ mix('css/app.css') }}?v={{ time() }}">

        {{-- Scripts --}}
        @routes
        <script src="{{ mix('js/app.js') }}?v={{ time() }}" defer></script>

        {{-- Font Awesome Icons --}}
        <script src="https://kit.fontawesome.com/cb4ddaf488.js" crossorigin="anonymous"></script>

        {{-- Google Fonts --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Nunito:wght@200;300;400;700&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>