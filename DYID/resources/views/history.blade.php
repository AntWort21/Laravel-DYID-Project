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

            <div class="big-box">
                <div class="small-box">
                    <div class="date-box">
                        2021-03-25 09:16:25
                        {{-- Please insert time stamp here --}}
                    </div>
                    <div class="item-box">
                        <img class="image" src="{{ asset('storage/item.jpg') }}" alt="">
                        <div class="desc-box">
                            <h2>Iphone XR</h2>
                            <p class="p-1">(IDR. 5,950,000)</p>
                            <P class="p-1">X2 PCS</P>
                            <P class="p-2">IDR. 11,900,000</P>
                        </div>
                    </div>
                </div>
            </div>

            <div class="big-box">
                <div class="small-box">
                    <div class="date-box">
                        2021-03-25 09:16:25
                        {{-- Please insert time stamp here --}}
                    </div>

                    {{-- for each item in the same date print --}}
                    <div class="item-box">
                        <img class="image" src="{{ asset('storage/item.jpg') }}" alt="">
                        <div class="desc-box">
                            <h2>Iphone XR</h2>
                            <p class="p-1">(IDR. 5,950,000)</p>
                            <P class="p-1">X2 PCS</P>
                            <P class="p-2">IDR. 11,900,000</P>
                        </div>
                    </div>
                    <div class="item-box">
                        <img class="image" src="{{ asset('storage/item.jpg') }}" alt="">
                        <div class="desc-box">
                            <h2>Iphone XR</h2>
                            <p class="p-1">(IDR. 5,950,000)</p>
                            <P class="p-1">X2 PCS</P>
                            <P class="p-2">IDR. 11,900,000</P>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
</body>
</html>