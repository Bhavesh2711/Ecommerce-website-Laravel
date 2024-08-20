<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .product_main {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        select {
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
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color:#184E93;
            color: white;
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

            <div class="product_main">
                <div class="card" style="margin-top: 30px;">
                    <h2>Add Product</h2>
                    <form action="{{URL('admin/product_insert')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="product_name">Product Name:</label>
                        <input type="text" id="product_name" name="name" required>

                        <label for="description">Description:</label>
                        <textarea id="description" name="description" rows="4" required></textarea>

                        <label for="price">Price:</label>
                        <input type="number" id="price" name="price" step="0.01" required>

                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" required>

                        <label for="category">Category:</label>
                        <!-- <select id="category" name="category[]" required>
                            <option value="">Select Category</option>
                            <option value="electronics">Electronics</option>
                            <option value="clothing">Clothing</option>
                            <option value="books">Books</option>

                        </select> -->
                        <select name="category[]" id="category" multiple>
                            if(isset($categories))
        @foreach($categories as $category)
            <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
        @endforeach
        
    </select>
                        <br>
                        <br>
                        <label for="image">Image:</label>

                        <input type="file" id="image" name="gallery" accept="image/*" required><br>
                        <div class="btn">
                            <input type="submit" class="btn btn-success" value="Add Product">
                        </div>
                    </form>
                </div>
             
            </div>
            
 <!-- display the data -->
   <div class="data-display">
        <table class="table table-striped" >
            <tr>
                <th>Id</th>
                <th>Product Name </th>
                <th>product Description</th>
                <th>price</th>
                <th>Quantity</th>
                <th>Category</th>
                <th>Image</th>
            </tr>
            @if(isset($data))
            @foreach($data as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->name}}</td>
                <td>{{$d->description}}</td>
                <td>{{$d->price}}</td>
                <td>{{$d->quantity}}</td>
                <td>{{$d->category}}</td>
                <td><img src="{{ asset('uploads/' . $d->gallery) }}" width="70" height="70"></td>
            </tr>
            @endforeach
            @endif
        </table>
    </div>


        </div>
        
     
 
    </main>




</body>

</html>

  