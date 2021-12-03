<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/viewproduct.css') }}">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
        <div class="content">
            <div class='page-title'>
                Manage Product
            </div>
            <div class="add-box">
                <a href="/newproduct" class="btn btn-success">Add Product</a>
            </div>

            <br><br>

            <table>

                <tr>
                    <th class="no">No</th>
                    <th class="image">Product Image</th>
                    <th class="name">Product Name</th>
                    <th class="desc">Product Description</th>
                    <th class="price">Product Price</th>
                    <th class="category">Product Category</th>
                    <th class="action">Action</th>
                </tr>
                    @foreach ($products as $product)
                    <form action="/deleteproduct/{{ $product->id }}" method="POST">
                    @csrf
                    <tr>
                        <th class="no">{{$product->id }}</th>
                        <th class="image"><img src="../storage/productImage/{{ $product->image }}" alt="" class='product-image'></th>
                        <th class="name">{{ $product->name }}</th>
                        <th class="desc">{{ $product->description }}</th>
                        <th class="price">{{ $product->price }}</th>
                        @foreach ($categories as $category)
                            @if ($product->category_id == $category->id)
                                <th class="category">{{ $category->name }}</th>
                            @endif
                        @endforeach
                        <th class="action">
                            <a href="/updateproduct/{{ $product->id }}" class="orange-button">Update</a>
                            <button type="submit" class="red-button" value="Delete">Delete</button>
                        </th>
                    </tr>
                    </form>
                    @endforeach
            </table>
        </div>
    @endsection

</body>
</html>