<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @if($title)
    <title>{{ $title }}</title>
    @else
    <title>Climbing</title>
    @endif
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <link rel="icon" type="image/png" href="{{ asset('/img/mountain-logo.png') }}" sizes="32x32">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya&family=Edu+VIC+WA+NT+Beginner&family=Inter:wght@400;600;700&family=Lora&family=Roboto+Mono:wght@300&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @stack('scripts')
</head>

<body class="bg-light-grey">
    @include('partials.header')
    <hr />
    @yield('content')
    @include('partials.footer')
</body>

</html>