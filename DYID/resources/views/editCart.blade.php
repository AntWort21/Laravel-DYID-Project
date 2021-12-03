<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/editcart.css') }}">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
        <div class="content">
            @foreach ($products as $product)
                @if ($product->id == $selectedItem->product_id)
                <div class="product-box">
                    <div class="image-box">
                        <img src="../storage/productImage/{{ $product->image }}" alt="" class='product-image'>
                    </div> 
                    <div class="desc-box">
                        <h2>{{ $product->name }}</h2>

                        <hr>

                        <h3>Price:</h3>
                        <p>{{ $product->price }}</p>

                        <hr>

                        <h3>Description</h3>
                        <p>{{ $product->description }}</p>

                        <hr>

                        <form action="/editcart/{{ $selectedItem->product_id }}" method="POST">
                        @csrf
                        <h3>Quantity : </h3>
                            <div class="quantity-box">
                                <input type="text" class="input-quantity" value="{{ $selectedItem->quantity }}" name="quantity">
                                <button class="save-button" type="submit">Save</button>   
                            </div>
                        </form>

                    </div>
                </div>
                @endif
            @endforeach
        </div>
    @endsection

</body>
</html>