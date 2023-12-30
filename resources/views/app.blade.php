<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    @routes
    @vite(['resources/js/app.js'])
    @inertiaHead
    <script defer data-domain="davisngl.com" src="https://plausible.io/js/script.js"></script>
</head>
<body>
    @inertia
</body>
</html>
