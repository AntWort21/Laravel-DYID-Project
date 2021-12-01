<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/editcategory.css') }}">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
        <div class="content">
            <div class='page-title'>
                Manage Category
            </div>

            <table>

                <tr>
                    <th class="no">No</th>
                    <th class="name">Category Name</th>
                    <th class="action">Action</th>
                </tr>
                @foreach ($categories as $category)
                    <form action="/deleteproduct/{{ $product->id }}" method="POST">
                        @csrf
                        <tr>
                            <th class="no">{{ $category->id }}</th>
                            <th class="name">{{ $category->name }}</th>
                            <th class="action">
                                <a href="/updatecategory" class="orange-button">Update</a>
                                <button type="submit" class="red-button">Delete</button>
                            </th>
                        </tr>
                    </form>
                @endforeach
            </table>
        </div>
    @endsection

</body>
</html>