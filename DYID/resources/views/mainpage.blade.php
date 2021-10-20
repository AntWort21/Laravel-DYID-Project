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
           
            <div class='big-itembox'>
                <div class='small-itembox'> 
                    <img src="{{ asset('pictures/item.jpg') }}" alt="" class='product-image'>
                    <div class='small-textbox'>
                        <h3>This is the item's name</h3>
                        <p class='item-description'>This is the item's description</p>
                        <p class='item-price'>IDR. 30,000</p>
                    </div>
                    <button class='detail-button'>More Detail</button>
                </div>

                <div class='small-itembox'>
                    <img src="{{ asset('pictures/item.jpg') }}" alt="" class='product-image'>
                    <div class='small-textbox'>
                        <h3>This is the item's name</h3>
                        <p class='item-description'>This is the item's description</p>
                        <p class='item-price'>IDR. 30,000</p>
                    </div>
                    <button class='detail-button'>More Detail</button>
                </div>

                <div class='small-itembox'>
                    <img src="{{ asset('pictures/item.jpg') }}" alt="" class='product-image'>
                    <div class='small-textbox'>
                        <h3>This is the item's name</h3>
                        <p class='item-description'>This is the item's description</p>
                        <p class='item-price'>IDR. 30,000</p>
                    </div>
                    <button class='detail-button'>More Detail</button>
                </div>
            </div>

            <div class='big-itembox'>
                <div class='small-itembox'> 
                    <img src="{{ asset('pictures/item.jpg') }}" alt="" class='product-image'>
                    <div class='small-textbox'>
                        <h3>This is the item's name</h3>
                        <p class='item-description'>This is the item's description</p>
                        <p >IDR. 30,000</p>
                    </div>
                    <button class='detail-button'>More Detail</button>
                </div>

                <div class='small-itembox'>
                    <img src="{{ asset('pictures/item.jpg') }}" alt="" class='product-image'>
                    <div class='small-textbox'>
                        <h3>This is the item's name</h3>
                        <p class='item-description'>This is the item's description</p>
                        <p>IDR. 30,000</p>
                    </div>
                    <button class='detail-button'>More Detail</button>
                </div>

                <div class='small-itembox'>
                    <img src="{{ asset('pictures/item.jpg') }}" alt="" class='product-image'>
                    <div class='small-textbox'>
                        <h3>This is the item's name</h3>
                        <p class='item-description'>This is the item's description</p>
                        <p>IDR. 30,000</p>
                    </div>
                    <button class='detail-button'>More Detail</button>
                </div>
            </div>

        </div>    
    


    @endsection
</body>
</html>

{{-- <style>
.big-itembox{
    display: flex;
    justify-content: space-around;
}

.small-itembox{
    box-shadow: 0 2px 10px 0 rgba(0, 0, 0, 0.6);
    margin-top: 20px;
    margin-bottom: 20px;
    width: 30%;
}

</style> --}}