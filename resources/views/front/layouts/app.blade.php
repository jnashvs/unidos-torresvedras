<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unidos por Torres Vedras</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="container-parent" id="app">

        <div class="header-main">
            @include('front.partials.header')
        </div>

        <div class="site-content">

            @yield('content')

            <!-- <example-component> </example-component> -->

            <!-- <formulario-component /> -->
        </div>



        <div class="footer-content {{isset($footersize) ? $footersize : ''}}">
            @include('front.partials.footer')
        </div>


        </div>

        <script src="{{ asset('js/app.js') }}"></script>

        {{-- include analytics --}}
        @include('front.partials.analytics')

        {{-- cookie popup --}}
        <div class="cookie-popup">
            @include('cookieConsent::index')
        </div>
    </body>
</html>
