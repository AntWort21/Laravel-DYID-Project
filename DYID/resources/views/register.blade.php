<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/registration.css') }}">
    <title>Document</title>
</head>
<body>
    @extends('layouts/headerFooter')
    @section('content')
        <div class="content">
            <div class="register-content-box">
                <div class="join-msg">
                    <h2>Join With Us</h2>    
                </div>
                <form action="/insertion" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="full-name">
                        <input type="text" name="name" id="name" placeholder="Full Name" class="name">
                    </div>
                    <div class="gender">
                        <h3>Gender</h3>
                        {{-- 1 -> male, 2 -> female --}}
                        <label for="male"><input type="radio" name="gender" id="male" value="1">Male</label> 
                        <label for="female"><input type="radio" name="gender" id="female" value="2">Female</label>
                    </div>
                    <div class="address">
                        <input type="text" name="address" id="address" placeholder="Address">
                    </div>
                    <div class="email">
                        <input type="text" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="password">
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="confirm-password">
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password">
                    </div>
                    <div class="terms-and-services">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label for="terms-and-service">I agree with the terms and conditions</label>
                    </div>
                    <div class="submit-reset">
                        {{-- <div class="registerBtn" > --}}
                        <input type="submit" class="registerBtn" value="Register Now">
                        {{-- </div> --}}
                    </div>
                </form>
            </div>
        </div>
    @endsection

</body>
</html>