<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/mainpage.css') }}">
    <title>DYID</title>
</head>
<body>
    @extends('layouts/headerFooter')
    @section('content')
        <div class='content'>

            <div class='page-title'>
                New Stuffs
            </div>
           @foreach($products as $product)
                    <div class='big-itembox'>
                        @for($i = 1 ; $i <= 3 ; $i++)
                            @if($product->product_id == $i) 
                                <div class='small-itembox'> 
                                    <img src="{{ asset('storage/item.jpg') }}" alt="" class='product-image'>
                                    <div class='small-textbox'>
                                        <h3>{{ $product->product_name }}</h3>
                                        <p class='item-description'>{{ $product->product_description }}</p>
                                        <p class='item-price'>{{ $product->product_price }}</p>
                                    </div>
                                    <button class='detail-button'>More Details</button>
                                </div>
                            @endif
                        @endfor
                    </div>

                    <div class='big-itembox'>
                        @for($i = 4 ; $i <= 6 ; $i++)
                            @if($product->product_id == $i) 
                                <div class='small-itembox'> 
                                    <img src="{{ asset('storage/item.jpg') }}" alt="" class='product-image'>
                                    <div class='small-textbox'>
                                        <h3>{{ $product->product_name }}</h3>
                                        <p class='item-description'>{{ $product->product_description }}</p>
                                        <p class='item-price'>{{ $product->product_price }}</p>
                                    </div>
                                    <button class='detail-button'>More Details</button>
                                </div>
                            @endif
                        @endfor
                    </div>
                </div> 
           @endforeach
    


    @endsection
</body>
</html>