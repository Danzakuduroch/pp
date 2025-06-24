<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Военный комиссариат</title>
    @vite('resources/css/app.css')
</head>

<body class="page">
    @include('components.header')
    <main class="main">
        @yield('content')
    </main>
    @include('components.footer')
</body>

</html>