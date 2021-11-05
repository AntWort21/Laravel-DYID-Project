<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/newproduct.css') }}">
    <title>Document</title>
</head>
<body>
    @extends('layouts/headerFooter')
    @section('content')
        <div class="content">
            <div class="new-product-content-box">
            
                <form action="/newproduct/insertion"  method="POST">
                    @csrf

                    <div class="title">
                        <h2>Add new product</h2>    
                    </div>

                    <div class="inputbox">
                        <input type="text" name="name" placeholder="Product Name" class="namebox">
                    </div>
                    <div class="inputbox">
                        <input type="text" name="description" placeholder="Description" class="descriptionbox">
                    </div>
                    <div class="inputbox">
                        <input type="text" name="price" placeholder="Price" class="pricebox">
                    </div>
                    <div class="inputbox">
                        <select name="category" class="categorybox">
                            <option value="1" selected>Electronics</option>
                            <option value="2" >Accessories</option>
                            <option value="3" >Games</option>
                        </select>
                    </div>
                    <div class="inputbox">
                        <input type="file" name="image" class="imagebox">
                    </div>

                    <div class="submit-reset">
                        <div>
                            <input class="submitBtn" type="submit" value="Add">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection

</body>
</html>