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
    @extends('layouts/headerFooter')
    @section('content')
        <div class="content">
            <div class='page-title'>
                Manage Product
            </div>

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

                <tr>
                    <th class="no">1</th>
                    <th class="image"><img src="{{ asset('storage/item.jpg') }}" alt="" class='product-image'></th>
                    <th class="name">Sausages</th>
                    <th class="desc">These sausages are amazing and should be tasted by every living man and woman alive tester of course this is made to be long</th>
                    <th class="price">1444000</th>
                    <th class="category">Food</th>
                    <th class="action"><button type="submit" class="orange-button">Update</button><button type="submit" class="red-button">Delete</button></th>
                </tr>

                <tr>
                    <th class="no">2</th>
                    <th class="image"><img src="{{ asset('storage/item.jpg') }}" alt="" class='product-image'></th>
                    <th class="name">Sausages</th>
                    <th class="desc">These sausages are amazing and should be tasted by every living man and woman alive tester of course this is made to be long</th>
                    <th class="price">1444000</th>
                    <th class="category">Food</th>
                    <th class="action"><button type="submit" class="orange-button">Update</button><button type="submit" class="red-button">Delete</button></th>
                </tr>

                <tr>
                    <th class="no">3</th>
                    <th class="image"><img src="{{ asset('storage/item.jpg') }}" alt="" class='product-image'></th>
                    <th class="name">Sausages</th>
                    <th class="desc">These sausages are amazing and should be tasted by every living man and woman alive tester of course this is made to be long</th>
                    <th class="price">1444000</th>
                    <th class="category">Food</th>
                    <th class="action"><button type="submit" class="orange-button">Update</button><button type="submit" class="red-button">Delete</button></th>
                </tr>

            </table>
        </div>
    @endsection

</body>
</html>