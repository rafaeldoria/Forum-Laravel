<!DOCTYPE html>
<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=devide-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>

        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <header>
            @include('layouts.default.header')
        </header>
        <main>
            <section id="app">
                @yield('content')
            </section>
        </main>

        @include('layouts.default.footer')

        @component('layouts.default.body_scripts')
            @yield('scripts')
        @endcomponent

    </body>
</html>
