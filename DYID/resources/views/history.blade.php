<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/history.css') }}">
    <title>DYID History</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
        <div class='content'>

            <div class='page-title'>
                My History
            </div>
            @if ($checker == 0)
                <p>There is no item in your history</p>
            @else
                @foreach ($histories as $history)
                <div class="big-box">
                    <div class="date-box">
                        {{ $history->updated_at }}
                    </div>
                    @foreach ($historyDetails as $historyDetail)
                        @if ($history->id == $historyDetail->history_id)

                                <div class="small-box">
                                    @foreach ($products as $product)
                                        @if ($historyDetail->product_id == $product->id)
                                            <div class="item-box">
                                                <img class="image" src="../storage/productImage/{{ $product->image }}" alt="">
                                                <div class="desc-box">
                                                    <h2 class="item-name">{{ $product->name }}</h2>
                                                    <p class="p-1">IDR. {{ $product->price }}</p>
                                                    <p class="p-1">Quantity : {{ $historyDetail->quantity }}x</p>
                                                    <p class="p-2">Sub Total : IDR.{{ $product->price * $historyDetail->quantity }}</p>
                                                    @php
                                                        $total += $product->price * $historyDetail->quantity;    
                                                    @endphp
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                        @endif    
                    @endforeach
                    <div class="total-box">
                        Total Price : IDR. {{ $total }}
                    </div>
                    @php
                        $total = 0;    
                    @endphp
                </div>
                @endforeach  
            @endif
        </div>
    @endsection
</body>
</html>