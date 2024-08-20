<style>
 .orders {
    padding: 10px 10px 10px 173px;
}
</style>
<main class="d-flex flex-nowrap">

@extends('admin/master')

<div class="sider-nav">
    <form class="d-flex" role="search" style="padding-left: 100px;     padding-top: 10px;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 500px;height: 46px;">
        <button class="btn btn" type="submit" style="background-color: #fff;"><b>Search</b></button>
        <a href="/admin/login" style="color: #fff;"> login</a>
    </form>
  
    <div class="orders" style="
    width: 1477px;
">
    <table class="table table-striped"style="
    width: 1636px;
" >
        <h3>Orders Infromation</h3>
            <tr class="tr1">
                <th>ID</th>
                <th>Product Id</th>
                <th>User Id</th>
                <th>Status</th>
                <th>Payment Method</th>
                <th>Payment Status</th>
                <th>Address</th>
                <!-- Add more columns as needed -->
            </tr>
     
            <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->product_id}}</td>
                <td>{{ $order->	user_id}}</td>
                <td>{{ $order->	status}}</td>
                <td>{{ $order->payment_method}}</td>
                <td>{{ $order->payment_status}}</td>
                <td>{{ $order->address }}</td>
                <!-- Add more columns as needed -->
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    </div>
</main>