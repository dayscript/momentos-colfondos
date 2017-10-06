<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Momentos - Colfondos</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        @include('general.header')
            <section class="content {{ $section_class or '' }}">
                @yield('content')
            </section>
        @include('general.footer')
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>