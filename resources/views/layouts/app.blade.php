<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Глобальные стили --}}
    <link rel="stylesheet" href="/css/globals.css">
    <link rel="stylesheet" href="/css/style.css">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>@yield('title', 'ВГТУ')</title>

    @stack('styles')
</head>
<body>

    {{-- Место, куда подставляется содержимое страниц --}}
    @yield('content')

    {{-- Скрипты --}}
    <script src="/js/Filter.js"></script>

    @stack('scripts')
</body>
</html>
