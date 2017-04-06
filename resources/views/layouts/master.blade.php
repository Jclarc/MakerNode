<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{url("css/materialize.min.css")}}"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <style>
        body {
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
        }

    </style>
    <title>@yield('title')</title>
</head>
<main>
<body>
    @include('include.nav')

<div class="content">
    @yield('content')
</div>
</div>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</main>
@include('include.footer')

</html>
