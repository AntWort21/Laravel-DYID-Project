<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
        <div class="content">

            @auth
                hi, {{ Auth::user()->name }}
                <form action="/logout" method='get'>
                    <input type="submit" value="Lougout">
                </form>
            @else

            <div class="login-content-box">
                <form action="/login" method="post">
                    @csrf
                    <div class="welcome-back-msg">
                        <h1>Welcome Back</h1>    
                    </div>
                    <div class="email">
                        <input type="text" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="password">
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="remember-me">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label for="remember-me">Remember me</label>
                    </div>
                    <div class="submit-reset">
                        <div>
                            <input class="loginBtn" type="submit" value="login">
                        </div>
                    </div>
                </form>
            </div>

            @endif

        </div>
    @endsection

</body>
</html>