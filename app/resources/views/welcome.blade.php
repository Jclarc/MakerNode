<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MakerNode</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
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
    </head>
    <body>
        <main>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Enter</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md light-green-text text-accent-2">
                    MakerNode
                </div>
            </div>

        </div>

        <div class="container">
            <div class="center-align">
                <div class="card grey darken-2 hoverable">
                    <div class="card-image">
                        <img src="http://lorempixel.com/250/250/technics" height="250" width="250">
                    </div>
                    <div class="card-content light-green-text text-accent-2">
                        <p class="text-bold">I am a very simple card. I am good at containing small bits of information.
                            I am convenient because I require little markup to use effectively.</p>
                    </div>
                </div>
            </div>


        </div>


        </main>
    </body>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>


</html>
