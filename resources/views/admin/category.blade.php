<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .category_main {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .card {
            width: 100%;
            padding: 40px 40px 42px 27px;
        }

        .main {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            /* margin: 0;
            padding: 0;
            display: flex; */
            align-items: center;
            justify-content: center;
        }

        .data-display {
            padding: 10px 392px 10px 436px;
        }
    </style>
</head>

<body>
    <main class="d-flex flex-nowrap">

        @extends('admin/master')

        <div class="sider-nav">
            <form class="d-flex" role="search" style="padding-left: 100px;     padding-top: 10px;">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 500px;">
                <button class="btn btn" type="submit" style="background-color: #fff;"><b>Search</b></button>
            </form>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Add Category</title>
                <link rel="stylesheet" href="styles.css">
            </head>

            <body>
                <div class="category_main">
                    <div class="card">
                        <h2>Add Category</h2>
                        <form action="{{URL('/admin/category_insert')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <label for="category_name">Category Name:</label>
                            <input type="text" id="category_name" name="category_name" required>

                            <label for="description">Description:</label>
                            <textarea id="description" name="description" rows="4" required></textarea>

                            <label for="image">Image:</label>

                            <input type="file" id="image" name="gallery" accept="image/*" required><br>

                            <input type="submit" class="btn btn-success" value="Add Category" name="addcartegory">
                        </form>
                    </div>
                </div>
                <div class="data-display">
                    <table class="table table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Category Descripstion</th>
                            <th>Image</th>
                        </tr>
                        @if(isset($data))
                        @foreach($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->category_name}}</td>
                            <td>{{$d->category_desc}}</td>
                            <td><img src="{{ asset('uploads/' . $d->gallery) }}" width="70" height="70"></td>
                        </tr>
                        @endforeach
                        @endif
                    </table>
                </div>
    </main>



</body>

</html>

</body>

</html>