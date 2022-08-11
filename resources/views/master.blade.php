<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pet Paws</title>
    <link rel="stylesheet" href="/css/styles.css">
    @vite('resources/css/app.css')
</head>

<body class="h-screen">
    <nav class="drop-shadow-2xl flex flex-row justify-between items-center p-5">
        <div class="text-3xl">Pet <span class="text-sky-300">Paws</span> </div>
        <div class="flex flex-row justify-between items-center gap-5">
            <a class="text-xl" href="#">Home</a>
            <a class="text-xl" href="#">About</a>
            <a class="text-xl text-white px-5 py-1 rounded-lg bg-sky-300">Sign In</a>
        </div>
    </nav>
    @yield('content')
    @stack('scripts')
</body>

</html>