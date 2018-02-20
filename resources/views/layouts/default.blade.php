<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=devide-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <title></title>
    </head>
    <body>
        <header>
            @include('layouts.default.header')
        </header>
        <main>
            <section>
                @yield('content')
            </section>
        </main>

        @include('layouts.default.footer')

        @component('layouts.default.body_scripts')
            @yield('scripts')
        @endcomponent

        @endcomponent
    </body>
</html>
