@extends('master')
@section("content")
<style>
      .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .card-body {
        padding: 20px;
    }

    .card-title {
        font-size: 20px;
        font-weight: bold;
        color: #333;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-weight: bold;
        color: #666;
    }

    .form-control {
        border-radius: 5px;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
    }

    .btn-primary:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #721c24;
        border-color: #f5c6cb;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
    }

    .alert-danger .close {
        position: relative;
        top: -2px;
        right: -21px;
    }

    .hide {
        display: none;
    }   
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#couponSelect').change(function() {
            var couponCode = $(this).val();
            var discountAmount = $(this).find('option:selected').text().split('-')[1].trim();
            $('#discountAmount').val(discountAmount);
        });
    });
</script>

<div class="custom-product" style="padding: 100px;">
    <div class="col-sm-12">
    <div>
    Get Coupon:
    <select id="couponSelect" name="coupon_code">
        <option value="">Select Coupon</option>
        @if(isset($coupons))
        @foreach($coupons as $coupon)
            <option value="{{ $coupon->coupon_code }}">{{ $coupon->coupon_code }} - {{ $coupon->discount_amount }}</option>
        @endforeach
        @endif
    </select>
</div>

        <table class="table">
            <tbody>
                <tr>
                    <td><b>Amount</b></td>
                    <td>$ {{$total}}</td>
                </tr>
                <tr>
                    <td><b>Tax</b></td>
                    <td>$ 0</td>
                </tr>
                <tr>
                    <td><b>Delivery</b></td>
                    <td>$ 10</td>
                </tr>
                <tr>
                    <td><b>Total Amount</b></td>
                    <td>$ {{$total+10}}</td>
                </tr>
            </tbody>
        </table>
        <form action="/orderplace" method="POST" id="orderForm">
            @csrf
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="address" placeholder="Enter your Address"></textarea>
            </div><br>
            <div class="form-group">
                <label for="paymentMethod"><b>Payment Method</b></label>
                <div class="form-group">
                    <input type="radio" value="online" name="payment" id="onlinePayment"><span>Online Payment</span><br>
                    <input type="radio" value="cash" name="payment" id=""><span>Cash On Delivery</span><br>
                    <input type="radio" value="emi" name="payment" id="emiPayment"><span>EMI Payment</span><br>
                </div>
                <input type="submit" class="btn btn-success" name="" value="Order Now">
            </div>
        </form>
    </div>
</div>
</div>

<!-- Modal for Cash On Delivery -->
<div class="modal fade" id="onlinePaymentModal" tabindex="-1" role="dialog" aria-labelledby="onlinePaymentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="onlinePaymentModalLabel">Cash On Delivery</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    
        <div class="row">
            <div class="col-md-9 offset-md-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Payment Details</h5>
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
                        <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                            @csrf
                            <div class='form-group required'>
                                <label class='control-label'>Name on Card</label>
                                <input class='form-control' size='4' type='text'>
                            </div>
                            <div class='form-group required'>
                                <label class='control-label'>Card Number</label>
                                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                            </div>
                            <div class='form-row'>
                                <div class='col-md-4 form-group cvc required'>
                                    <label class='control-label'>CVC</label>
                                    <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                                </div>
                                <div class='col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Month</label>
                                    <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                                </div>
                                <div class='col-md-4 form-group expiration required'>
                                    <label class='control-label'>Expiration Year</label>
                                    <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                                </div>
                            </div>
                            <div class='form-group error hide'>
                                <div class='alert-danger alert'>Please correct the errors and try again.</div>
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Pay Now ($100)</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
    $(document).ready(function(){
        $('#onlinePayment').click(function(){
            $('#onlinePaymentModal').modal('show');
        }); 
    });
</script>
@endsection
