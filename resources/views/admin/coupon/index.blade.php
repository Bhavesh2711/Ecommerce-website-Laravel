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
        <h2>All Coupons</h2>
        <a href="{{ route('coupons.create') }}" class="btn btn-primary">Create Coupon</a>
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


      
    </div>


 








    </div>
</main>