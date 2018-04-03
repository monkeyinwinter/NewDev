<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Coucou !</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

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
            header {
                height: 3.5em;
                background: #111111;
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
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
                color: white;
                font-size: 20px;
                font-weight: bold;
                letter-spacing: .1rem;
                text-decoration: none;

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
        </style>
    </head>
    <body>

<header>
            <div class="top-left">
               WATCH AND SHOW

            </div>
             @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
</header>
            <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Hi Camille ! Could you see how good I am?

                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Sex</a>
                    <a href="https://laracasts.com">accordéon</a>
                    <a href="https://laravel-news.com">Alcool</a>
                    <a href="https://forge.laravel.com">Rock'n'Roll</a>
                    <a href="https://github.com/laravel/laravel">Drog</a>
                </div>
            </div>
        </div>
    </body>
</html>
