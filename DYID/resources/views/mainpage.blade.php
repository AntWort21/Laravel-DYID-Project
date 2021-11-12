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
                    @if ($loop->iteration == 4 || $loop->iteration == 1)
                        <div class="item">
                    @endif

                            <div class='big-itembox'>
                                <div class='small-itembox'> 
                                    <img src="{{ asset('storage/item.jpg') }}" alt="" class='product-image'>
                                        <div class='small-textbox'>
                                            <h3>{{ $product->product_name }}</h3>
                                            <p class='item-description'>{{ $product->product_description }}</p>
                                            <p class='item-price'>IDR. {{ $product->product_price }}</p>
                                        </div>
                                        <form action="mainpage/detail">
                                            <input type="hidden">
                                            <button type="submit" class='detail-button'>More Details</button>
                                        </form>
                                </div>
                            </div>
                    @if($loop->last || $loop->iteration == 3)
                        </div>
                    @endif
                @endforeach

            <div class="pagination">
                <span>    
                    {{ $products->onEachSide(5)->links() }}
                <span>
            </div>
        </div>
    @endsection
</body>
</html>


