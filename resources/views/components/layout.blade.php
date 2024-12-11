<!doctype html>
<html lang={{ str_replace('_', '-', app()->getLocale()) }}>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>BoardGame app</title>
</head>
<body class="flex flex-col min-h-screen">
<x-nav></x-nav>
<main class="flex-grow">
    {{$slot}}
</main>
<x-footer></x-footer>
</body>
</html>