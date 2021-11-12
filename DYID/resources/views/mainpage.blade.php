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
    @extends('layouts.app')
    @section('content')
        <div class='content'>

            <div class='page-title'>
                New Stuffs
            </div>

            @foreach($products as $product)
                @if ($loop->iteration == 4 || $loop->iteration == 1)
                    <div class="item justify-content-center">
                @endif
                    <div class='big-itembox'>
                        <div class="small-itembox" style="width: 18rem; margin-right: 3rem"> 
                            <img src="../storage/productImage/{{ $product->image }}" alt="" class='card-img-top'>
                            <div class='small-textbox'>
                                    <h3>{{ $product->name }}</h3>
                                    <p class='item-description'>{{ $product->description }}</p>
                                    <p class='item-price'>IDR. {{ $product->price }}</p>
                                </div>
                            <button class='detail-button'>More Details</button>
                        </div>
                    </div>
                @if($loop->last || $loop->iteration == 3)
                    </div>
                @endif
            @endforeach

            <div class="container" style="margin-top: 2rem">
                <span>    
                    {{ $products->onEachSide(5)->links('pagination::bootstrap-4') }}
                <span>
            </div>
        </div>
    @endsection
</body>
</html>


