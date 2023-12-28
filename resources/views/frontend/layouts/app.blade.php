{{--<!DOCTYPE html>--}}
{{--<html lang="{{ app()->getLocale() }}">--}}

{{--<head>--}}
{{--    <meta charset="utf-8" />--}}
{{--    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.png')}}">--}}
{{--    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />--}}
{{--    <title>@yield('title') | {{ config('app.name') }}</title>--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <meta name="description" content="{{ setting('meta_description') }}">--}}
{{--    <meta name="keyword" content="{{ setting('meta_keyword') }}">--}}
{{--    @include('frontend.includes.meta')--}}

{{--    <!-- Shortcut Icon -->--}}
{{--    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">--}}
{{--    <link rel="icon" type="image/ico" href="{{asset('img/favicon.png')}}" />--}}

{{--    <!-- CSRF Token -->--}}
{{--    <meta name="csrf-token" content="{{ csrf_token() }}">--}}

{{--    @vite(['resources/css/app-frontend.css'])--}}
{{--    @vite(['resources/js/app-frontend.js'])--}}

{{--    @livewireStyles--}}
{{--    --}}
{{--    @stack('after-styles')--}}

{{--    <x-google-analytics />--}}
{{--</head>--}}

{{--<body>--}}

{{--    @include('frontend.includes.header')--}}

{{--    <main>--}}
{{--        @yield('content')--}}
{{--    </main>--}}

{{--    @include('frontend.includes.footer')--}}

{{--    <!-- Scripts -->--}}
{{--    @livewireScripts--}}
{{--    @stack('after-scripts')--}}
{{--</body>--}}

{{--</html>--}}

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>@yield('title') | {{ config('app.name') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="{{ setting('meta_description') }}">
        <meta name="keyword" content="{{ setting('meta_keyword') }}">
        @include('frontend.includes.meta')

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @vite(['resources/css/app-frontend.css'])
        @vite(['resources/js/app-frontend.js'])

        @livewireStyles
        @stack('after-styles')

        <!-- Favicons -->
        <link href="{{ asset('frontend/img/favicon.png')}}" rel="icon">
        <link href="{{ asset('frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('frontend/vendor/aos/aos.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

        <!-- =======================================================
        * Template Name: FlexStart
        * Updated: Sep 18 2023 with Bootstrap v5.3.2
        * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
        * Author: BootstrapMade.com
        * License: https://bootstrapmade.com/license/
        ======================================================== -->
    </head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top">
        @include('frontend.includes.header')
    </header><!-- End Header -->


    <main id="main">
    @yield('content')

    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('frontend.includes.footer')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('frontend/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('frontend/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('frontend/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>
