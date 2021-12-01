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

                <tr>
                    <th class="no">1</th>
                    <th class="name">Television</th>
                    <th class="action"><button type="submit" class="orange-button"><a href="updatecategory">Update</a></button><button type="submit" class="red-button">Delete</button></th>
                </tr>

                <tr>
                    <th class="no">2</th>
                    <th class="name">Radio</th>
                    <th class="action"><button type="submit" class="orange-button"><a href="updatecategory">Update</a></button><button type="submit" class="red-button">Delete</button></th>
                </tr>

                <tr>
                    <th class="no">3</th>
                    <th class="name">Toys</th>
                    <th class="action"><button type="submit" class="orange-button"><a href="updatecategory">Update</a></button><button type="submit" class="red-button">Delete</button></th>
                </tr>

            </table>
        </div>
    @endsection

</body>
</html>