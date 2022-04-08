<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title inertia>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <script src="https://kit.fontawesome.com/70b001b4cc.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
{{--    @routes--}}
    <script src="{{ mix('js/app.js') }}" defer></script>

    @inertiaHead
</head>
<body class="font-sans antialiased">
@inertia

@env ('local')
    <script src="http://localhost:8080/js/bundle.js"></script>
@endenv
</body>
</html>
