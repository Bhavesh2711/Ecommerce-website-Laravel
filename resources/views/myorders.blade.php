@extends('master')
@section("content")

<div class="custom-product1" style="padding: 100px;">
    <div class="col-sm-12">
        <h4>My Orders</h4>
       
        <div class="custom-table">
            @foreach($orders as $item)
            <div class="order-item">
            <img src="{{ asset('uploads/' . $item->gallery) }}" width="370" height="270">
                <div class="item-details" style="padding-left: 50px;">
                    <p><strong>Name:</strong> {{$item->name}}</p>
                    <p><strong>Status:</strong> {{$item->status}}</p>
                    <p><strong>Address:</strong> {{$item->address}}</p>  
                    <p><strong>Payment Status:</strong> {{$item->payment_status}}</p>
                    <p><strong>Payment Method:</strong> {{$item->payment_method}}</p>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
   
</div>

@endsection
