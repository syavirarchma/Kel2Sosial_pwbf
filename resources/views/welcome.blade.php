<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head><!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">
        
                <title>SISB</title>
        
                <!-- Fonts -->
                <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
                <!-- Styles -->
                <style>
                    html, body {
                        background-color: rgb(220, 188, 229);
                        color: #242222;
                        font-family: 'Raleway';
                        font-weight: 100;
                        height: 200vh;
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
                        font-size: 60px;
                    }
                    .links > a {
                        color: #000000;
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
                <div class="flex-center position-ref full-height">
        
                    @if (Route::has('login') && Auth::check())
                        <div class="top-right links">
                            <a href="{{ url('/home') }}">Dashboard</a>
                        </div>
                    @elseif (Route::has('login') && !Auth::check())
                        <div class="top-right links">
                            <a href="{{ url('/login') }}">Login</a>
                            <a href="{{ url('/register') }}">Register</a>
                        </div>
                    @endif
        
                    <div class="content">
                        <div class="title m-b-md">
                          SISTEM INFORMASI 
                           SOSIAL BENCANA
                        </div>
        
                        <div class="links">
                          
                            <a href="/about">about</a>
                            <a href="/login">Login</a>
                            <a href="/news">News</a>                    
                        </div>
                    </div>
                </div>
            </body>
        </html>
       