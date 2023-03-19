<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/imageupload.css') }}">


    <script src="{{ asset('/js/app.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/imageupload.js') }}" defer></script>
</head>

<body>
    <div>
        @include('partials.header')

    </div>
    {{ $slot }}
    <div>
        @include('partials.footer')
    </div>
</body>

</html>
