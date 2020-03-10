<!Doctype html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="x-ua-compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <meta name="csrf-token" content="{{ csrf_token() }}">

            <title>{{ config('app.name', 'Laravel') }}</title>

            <link href="{{ asset('css/app.css') }}" rel="stylesheet">
            @stack('styles')
        </head>
        <body>
            @yield('content')
            @stack('scripts')
        </body>
    </html>
