<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    // public function index()
    // {
    //     $coupons = Coupon::all();
    //     return view('admin.coupon.index', compact('coupons'));
    // }
    
    public function create()
    {
        return view('admin.coupon.create');
    }

    public function store(Request $req)
    {
        $coupon_name=$req->input('coupon_code');
        $discount_amount=$req->input('discount_amount');
        $startdate=$req->input('start_date');
        $enddate=$req->input('end_date');

        DB::table('coupons')->insert([
            "coupon_code"=>$coupon_name,
            "discount_amount"=>$discount_amount,
            "start_date"=>$startdate,
            "end_date"=>$enddate
        ]);
        return redirect('admin/coupon/index');

       

       // return redirect()->route('admin.coupon.create')->with('success', 'Coupon created successfully.');
    }    
    
    public function index()
{
    $coupons = Coupon::all();
    return view('admin/coupon/index', ['coupons' => $coupons]);
}
public function display_coupon(){
    
}

}
