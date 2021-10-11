<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/headerfooter.css') }}">
    <title>Document</title>
</head>
<body>
    <div>
        <div class="header">
            <div class="header-upper">
                <div class="logo">
                    <img src="{{ asset('storage/DYID.JPG') }}" alt="" class="logo-size" width="100px">
                </div>
                <div class="search-section">
                    <input type="text" name="search" placeholder="Search Product..." class="search-bar">

                </div>
                <div class="search-button">
                    <img src="{{ asset('storage/SearchBtn.JPG') }}" alt="" class="logo-size" width="20px">
                </div>
            </div>
            <div class="header-lower">
                <div class="nav-bar">
                    <div class="home">
                        Home
                    </div>
                    <div class="my-cart">
                        My Cart
                    </div>
                    <div class="history-transaction">
                        History Transaction
                    </div>
                    <div class="manage-product">
                        Manage Product
                    </div>
                    <div class="manage-category">
                        Manage Category
                    </div>
                </div>
                <div class="header-buttons">
                    <div class="login">
                        <a href="login">
                            Login
                        </a>
                    </div>
                    <div class="register">
                        <a href="register">
                            Register
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @yield('content')
    <div>
        <div class="footer">
            <div class="footer-logo">
                <div class="logo">
                    <div class="facebook">
                        <img src="{{ asset('storage/facebook.png') }}" alt="" class="fbLogo">
                    </div>
                    <div class="instagram">
                        <img src="{{ asset('storage/ig-logo.png') }}" alt="" class="igLogo">
                    </div>
                    <div class="youtube">
                        <img src="{{ asset('storage/yt-logo.png') }}" alt="" class="ytLogo">
                    </div>
                </div>
            </div>

            <div class="footer-note">
                <div class="copyright">
                    &copy 2021 Copyright DY.ID
                </div>
            </div>
        </div>
    </div>
</body>
</html>