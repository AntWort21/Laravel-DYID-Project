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
    @extends('layouts.app')
    @section('content')
        <div class='content'>

            <div class='page-title'>
                My Cart
            </div>

            @foreach ($cartDetails as $cartDetail)
                @foreach ($products as $product)
                    @if($cartDetail->product_id == $product->id)
                        <div class="item-box">
                            <div class="photo-box">
                                <img src="../storage/productImage/{{ $product->image }}" alt="" class='product-image'>
                            </div>
                            <div class="desc-box">
                                <h2>{{ $product->name }}</h2>
                                <p>{{ $cartDetail->quantity }}</p>
                                <p>{{ $product->price }}</p>
                                <div class="button-box">
                                    <button class="edit-button">Edit</button>
                                    <button class="delete-button">Delete</button>
                                </div>
                                
                            </div>
                        </div>
                    @endif
                @endforeach
            @endforeach


            <h1>Total Price</h1>

            <div class=final-info>
                <p class="final-amount">IDR 50.376.000</p>
                <button class="checkout-button">Check Out</button>
            </div>
        </div>
    @endsection
</body>
</html>