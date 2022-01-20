<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #000;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
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
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Farhan Rasyid Kamaludin
                </div>

                <div class="links">
                    <a style="color : blue" href="https://facebook.com">Facebok</a>
                    <a style="color : purple"href="https://instagram.com/dark_jackjoker">instagram</a>
                    <a style="color : red" href="https://youtube.com">youtube</a>
                    <a style="color : cyan"href="https://twitter.com">twitter</a>
                    <a style="color : yellow"href="https://reddit.com">reddit</a>
                    <a style="color : white"href="https://store.steampowered.com">steam</a>
                    <a style="color : orange"href="https://gitlab.com/FarhanRasyidKamaludin">gitlab</a>
                    <a style="color : green"href="https://github.com/FarhanRasyid">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>