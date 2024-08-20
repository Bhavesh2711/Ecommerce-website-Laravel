
<style>
    .product_main {
        width: 60%;
        margin: 100px 0px 0px 351px;
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

        <div>
<div class="product_main">
            <div class="card" style="padding: 40px;">
                <h2>Create Coupon</h2>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('admin.coupons.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="coupon_code">Coupon Code</label>
                        <input type="text" class="form-control" id="coupon_code" name="coupon_code">
                    </div>
                    <div class="form-group">
                        <label for="discount_amount">Discount Amount</label>
                        <input type="decimal" class="form-control" id="discount_amount" name="discount_amount">
                    </div>
                    <div class="form-group">
                        <label for="start_date">Start Date</label>
                        <input type="date" class="form-control" id="start_date" name="start_date">
                    </div>
                    <div class="form-group">
                        <label for="end_date">End Date</label>
                        <input type="date" class="form-control" id="end_date" name="end_date">
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>


              
    </div>


    <table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Coupon Code</th>
            <th>Discount Amount</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @if(isset($coupons))
        @foreach($coupons as $coupon)
        <tr>
            <td>{{ $coupon->id }}</td>
            <td>{{ $coupon->coupon_code }}</td>
            <td>{{ $coupon->discount_amount }}</td>
            <td>{{ $coupon->start_date }}</td>
            <td>{{ $coupon->end_date }}</td>
            <td>Actions</td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>







</div>
</main>