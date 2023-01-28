<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
    <meta name="description" content="" />

    <!-- Page Title -->
    <title>@yield('title')  |  SafeSight</title>

    <!-- Page Icon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/sslogo.png') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">


    <!-- Scripts -->
    @vite('resources/css/app.css')
</head>
<body style="margin: 0px;">

    @guest
        <!-- Login Route -->
        @if (Route::has('login'))
            @yield('login_content')
        @endif
        @if (Route::has('register'))
            @yield('register_content')
        @endif
        @else
            <!-- User -->
            @if( Auth::user()->user_type == 1)
                @yield('modal')
                <div class="mainpage"> 
                @include('user.navbar')
                @yield('user_content')
                </div>

            <!-- Police -->
            @elseif( Auth::user()->user_type == 2)
                @yield('modal')
                <div class="mainpage"> 
                @include('police.navbar')
                @yield('police_content')
                </div>
        @endif
    @endguest
        <!-- <main class="py-4"> -->
        <!-- </main> -->
    <script src="{{ asset('assets/js/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootbox.min.js')}}"></script>
    <script src="{{ asset('assets/js/core.js') }}"></script>

    @yield('scripts')

    
</body>
</html>
