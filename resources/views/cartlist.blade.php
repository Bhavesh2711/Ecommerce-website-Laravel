@extends('master')
@section("content")

<div class="custom-product11" style="">
    <div class="col-sm-12">
        <a href="ordernow" class="btn btn-success">Order Now</a>
        <table class="custom-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $item)
                <tr>
                <td><img src="{{ asset('uploads/' . $item->gallery) }}" width="170" height="170"></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td><a href="/removecart/{{$item->cart_id}}" class="btn btn-danger" name="submit" value="Remove To Cart">Remove To Cart</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>

</div>

@endsection

