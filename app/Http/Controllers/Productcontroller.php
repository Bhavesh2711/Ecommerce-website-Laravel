<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class Productcontroller extends Controller
{
    function index()
    {
        $data = Product::all();

        return  view('product', ['products' => $data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search(Request $req)
    {
        $data = Product::where('name','like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }
    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $user = $req->session()->get('user');
            $cart = new Cart;
            $cart->user_id = $user['id']; // Access user ID from the user data
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    public static function cartItem()
    {
        $user = Session::get('user');
        if ($user && isset($user['id'])) {
            $userId = $user['id'];
            return Cart::where('user_id', $userId)->count();
        } else {
            
            return 0; 
        }
    }
    function cartlist()
    {
        $userId = Session::get('user')['id'] ?? null;

        if ($userId) {
            $products = DB::table('carts')
                ->join('products', 'carts.product_id', '=', 'products.id') // Assuming 'id' is the primary key in the 'products' table
                ->where('carts.user_id', $userId)
                ->select('products.*', 'carts.id as cart_id')
                ->get();
            return view('cartlist', ['products' => $products]);
        } else {
            // Handle the case when user ID is not available in the session
            // For example, redirect the user to login
            return redirect()->route('login'); // Adjust this route based on your application
        }
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow(){
        // Retrieve user ID from session
        $userId = Session::get('user')['id'] ?? null;
    
        if ($userId) {
            // Fetch products added to the cart by the current user
            $total = DB::table('carts')
                ->join('products', 'carts.product_id', '=', 'products.id')
                ->where('carts.user_id', $userId)
                ->sum('products.price');
                
            // Pass the total to the orderNow view
            return view('orderNow', ['total' => $total]);
        } else {
            // Redirect the user to the login page if not logged in
            return redirect()->route('login');
        }
    }
    
    function orderPlace(Request $req){
        $userId = Session::get('user')['id'] ?? null;
         $allCart=Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
            $order= new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userId)->delete();
         }
         $req->input();
        return redirect('/');
    }
    
    function myOders(){
      
         $userId = Session::get('user')['id'] ?? null;
    
         if ($userId) {
           
            $orders= DB::table('orders')
                 ->join('products', 'orders.product_id', '=', 'products.id')
                 ->where('orders.user_id', $userId)
                 ->get();
             
             return view('myorders', ['orders' => $orders]);
         } else {
    
             return redirect()->route('login');
         }
    }

}

