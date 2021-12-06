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
                {{ $history->updated_at }}
                    @foreach ($historyDetails as $historyDetail)
                        @if ($history->id == $historyDetail->history_id)
                            <div class="big-box">
                                <div class="small-box">
                                    <div class="date-box">
                                        {{-- Please insert time stamp here --}}
                                    </div>
                                    @foreach ($products as $product)
                                        @if ($historyDetail->product_id == $product->id)
                                            <div class="item-box">
                                                <img class="image" src="../storage/productImage/{{ $product->image }}" alt="">
                                                <div class="desc-box">
                                                    <h2>{{ $product->name }}</h2>
                                                    <p class="p-1">{{ $product->price }}</p>
                                                    <p class="p-1">{{ $historyDetail->quantity }}</p>
                                                    <p class="p-2">{{ $product->price * $historyDetail->quantity }}</p>
                                                    @php
                                                        $total += $product->price * $historyDetail->quantity;    
                                                    @endphp
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif    
                    @endforeach
                    Total Price: {{ $total }}
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