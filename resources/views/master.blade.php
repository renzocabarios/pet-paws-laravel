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
    <nav class="drop-shadow-2xl bg-sky-300 flex flex-row justify-between items-center p-5">
        <div class="text-3xl">Pet <span class="text-white">Paws</span> </div>
        <div class="flex flex-row justify-between items-center gap-5">
            <a class="text-sm  text-white" href="#">HOME</a>
            <a class="text-sm text-white" href="#">ABOUT</a>
            <a class="text-sm text-white" href="#">PRODUCT</a>
            <a class="text-sm text-white" href="#">SERVICE</a>
            <a class="text-sm text-white px-5 py-1 rounded-lg bg-sky-300">LOG IN / SIGN UP</a>
        </div>
    </nav>
    @yield('content')
    @stack('scripts')
</body>

</html>