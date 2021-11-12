<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/newcategory.css') }}">
    <title>Document</title>
</head>
<body>
    @extends('layouts.app')
    @section('content')
        <div class="content">
            <div class="new-category-content-box">
            
                <form action=""  method="POST">
                    @csrf

                    <div class="title">
                        <h2>Update category</h2>    
                    </div>

                    <div class="input-box">
                        <input type="text" name="name" placeholder="Category Name" class="input-name">
                    </div>

                    <div class="submit-reset">
                        <div>
                            <input class="orange-button" type="submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endsection

</body>
</html>