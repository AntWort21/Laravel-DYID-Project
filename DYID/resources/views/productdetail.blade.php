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
                <div class="desc-box">

                    <img src="../storage/productImage/{{ $selectedProduct->image }}" alt="" class='card-img-top'>

                    <br><br>

                    <h2>{{ $selectedProduct->name }}</h2>
                    @foreach($categories as $category)
                        @if ($category->id == $selectedProduct->category_id)
                            <h3>Category: {{ $category->name }}</h3>
                        @endif
                    @endforeach
                    

                    <hr>

                    <h3>Price:</h3>
                    <p>IDR {{ $selectedProduct->price }}</p>

                    <hr>

                    <h3>Description</h3>
                    <p>{{ $selectedProduct->description }}</p>

                    <hr>

                    @guest
                        <a href="/login"><button class="orange-button">Login to buy</button></a>
                    @else
                        @if(Auth::user()->role_id == 2)
                            <form method="POST" action="/cart/insert/{{ $selectedProduct->id }}">
                                @csrf
                                <label for="Qty">Qty: </label>
                                <input class="quantity @error('quantity') is-invalid @enderror" type="text" name="quantity" value="1">
                                <button class="orange-button" type="submit">Add to Cart</button>
                                
                                @error('quantity')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </form>
                        @endif
                    @endguest

                    <hr>

                </div>
            </div>
        </div>
    @endsection

</body>
</html>