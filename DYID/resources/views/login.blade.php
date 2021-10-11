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
    @extends('layouts/headerFooter')
    @section('content')
        <div class="content">
            <div class="register-content-box">
                <div class="welcome-back-msg">
                    <h1>Welcome Back</h1>    
                </div>
                <div class="email">
                    <input type="text" name="nama" id="email" placeholder="Email">
                </div>
                <div class="password">
                    <input type="password" name="nama" id="password" placeholder="Password">
                </div>
                <div class="remember-me">
                    <input type="checkbox" name="checkbox" id="checkbox">
                    <label for="remember-me">Remember me</label>
                </div>
                <div class="submit-reset">
                    <a href="">
                        <div class="loginBtn">
                            Login
                        </div>
                    </a>
                </div>
            </div>
        </div>
    @endsection

</body>
</html>