@extends('master')
@section("content")

<div class="container" style="padding-top: 100px;">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
            <img src="{{ asset('uploads/' . $product->gallery) }}" width="370" height="270">
                <div class="card-body">
                    <h2 class="card-title">{{$product['name']}}</h2>
                    <h3 class="card-text">Price: {{$product['price']}}</h3>
                    <h4 class="card-text">Category: {{$product['category']}}</h4>
                    <p class="card-text">Description: {{$product['description']}}</p>
                    <form action="/add_to_cart" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product['id']}}">
                        <input type="submit" class="btn text btn-primary" value="Add To Cart">
                    </form>
                    <a href="/buy_now/{{$product['id']}}" class="btn text btn-success mt-2">Buy Now</a>
                    <a href="/" class="btn text btn-secondary mt-2">Go back</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: box-shadow 0.3s;
    }

    .card:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card-img-top {
        width: 100%;
        height: 300px;
    }

    .btn text {
        width: 100%;
        margin-top: 10px;
    }
</style>

@endsection
