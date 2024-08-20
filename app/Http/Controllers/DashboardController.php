<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $product_count= DB::table('orders')->select('product_id', DB::raw('count(product_id) as product_id'))->groupBy('product_id')->get();
        $productCount = Product::count();
        $categoryCount = Category::count();
        $orderCount = Order::count();
        $userCount = User::count();

        return view('admin.dashboard', compact('productCount', 'categoryCount', 'orderCount', 'userCount'));
    }
}
