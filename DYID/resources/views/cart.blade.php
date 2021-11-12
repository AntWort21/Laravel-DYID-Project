<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cart.css') }}">
    <title>DYID My Cart</title>
</head>
<body>
    @extends('layouts/headerFooter')
    @section('content')
        <div class='content'>

            <div class='page-title'>
                My Cart
            </div>

            <div class="item-box">
                <div class="photo-box">
                    <img src="{{ asset('storage/item.jpg') }}" alt="" class='product-image'>
                </div>
                <div class="desc-box">
                    <h2>Acer Swift</h2>
                    <p>x2 pcs</p>
                    <p>IDR. 25.188.000</p>
                    <div class="button-box">
                        <button class="edit-button">Edit</button>
                        <button class="delete-button">Delete</button>
                    </div>
                    
                </div>
            </div>

            <div class="item-box">
                <div class="photo-box">
                    <img src="{{ asset('storage/item.jpg') }}" alt="" class='product-image'>
                </div>
                <div class="desc-box">
                    <h2>Acer Swift</h2>
                    <p class="info-text">x2 pcs</p>
                    <p class="info-text">IDR. 25.188.000</p>
                    <div class="button-box">
                        <button class="edit-button">Edit</button>
                        <button class="delete-button">Delete</button>
                    </div>
                    
                </div>
            </div>

            <h1>Total Price</h1>

            <div class=final-info>
                <p class="final-amount">IDR 50.376.000</p>
                <button class="checkout-button">Check Out</button>
            </div>
    @endsection
</body>
</html>