<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>

    <title>@yield('title')</title>
</head>
<body>
    <div id="id">
        @include('layouts._header')
        <main class="py-4 ">
            @yield('content')
        </main>
    </div>
</body>
</html>
