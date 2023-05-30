<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">

    @include('frontend.includes.meta')

    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <link rel="icon" type="image/ico" href="{{asset('img/favicon.png')}}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('before-styles')
    <link href="{{asset('front_end/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('front_end/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front_end/css/animate.min.css')}}">
    <!-- <!-- @vite(['resources/css/app-frontend.css']) -->
    @vite(['resources/js/app-frontend.js'])

    @stack('after-styles')

    <x-google-analytics />
</head>

<body>

    @include('frontend.includes.header')


    <main>
        @yield('content')
    </main>

    @include('frontend.includes.footer')
    
</body>

<!-- Scripts -->
@stack('before-scripts')
<script src="{{asset('front_end/js/jquery.min.js')}}"></script> 
<script src="{{asset('front_end/js/bootstrap.min.js')}}"></script> 
<script src="{{asset('front_end/js/jquery.touchSwipe.min.js')}}"></script> 
<script src="{{asset('front_end/js/custom.js')}}"></script>

@stack('after-scripts')

</html>