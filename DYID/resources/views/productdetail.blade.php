<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/productdetail.css') }}">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
        <div class="content">
            <div class="product-box">
                <div class="image-box">
                    <img src="{{ asset('storage/item.jpg') }}" alt="" class='product-image'>
                </div> 
                <div class="desc-box">
                    <h2>Samsung 6S Crystal</h2>
                    <h3>Category:</h3>
                    <p>Television</p>

                    <h3>Price:</h3>
                    <p>IDR. 21.000.000</p>

                    <h3>Description</h3>
                    <p>Resolution 3 1080 x 2 160 Power Consumption 185 W | 225 W HDMI 4 USB 2 Picture Engine Quantum Processor 4k Design</p>
                </div>
            </div>
        </div>
    @endsection

</body>
</html>