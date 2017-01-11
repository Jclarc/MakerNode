<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{url("css/materialize.min.css")}}"  media="screen,projection"/>

    <title>{{ config('app.name','MakerNode') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel =<?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>


    <style>
        body {
            font-size: 14px;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            height: 1000px;
        }

        main {
            flex: 1 0 auto;
        }
        .btn{
            background-color: #B6ED40;
        }
        .lime{
            color:#b2ff59;
            background-color: #616161;
        }
        li{
            font-size: 20px;
        }
        input:not([type]):focus:not([readonly]),
        input[type=text]:focus:not([readonly]),
        input[type=password]:focus:not([readonly]),
        input[type=email]:focus:not([readonly]),
        input[type=url]:focus:not([readonly]),
        input[type=time]:focus:not([readonly]),
        input[type=date]:focus:not([readonly]),
        input[type=datetime]:focus:not([readonly]),
        input[type=datetime-local]:focus:not([readonly]),
        input[type=tel]:focus:not([readonly]),
        input[type=number]:focus:not([readonly]),
        input[type=search]:focus:not([readonly]),
        textarea.materialize-textarea:focus:not([readonly]) {
            border-bottom: 1px solid #b2ff59;
            box-shadow: 0 1px 0 0 #b2ff59;
        }
        nav ul a {
            color:#b2ff59;
            font-size: 2rem;
        }
        .navbar-brand{
            font-size: 4rem;
        }
        .card{
            height:450px;
            width:550px;
        }

    </style>
    @yield('css')
</head>
    <main>
        <body>
        <div id="app">
            <nav class="nav-wrapper grey darken-2">
                <div class="container">
                        <a class="navbar-brand light-green-text text-accent-2" href="{{ url('/') }}">
                            {{ config('app.name', 'MakerNode') }}
                        </a>
                            @include('include.nav')
                </div>
            </nav>
            @yield('content')
        </div>

        </body>
    </main>
        @include('include.footer')
                <!-- Scripts -->
                <script src="/js/app.js"></script>
                <!--Import jQuery before materialize.js-->
                <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
@yield('js')
</html>
