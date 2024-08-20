<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use BadFunctionCallException;

class Categorycontroller extends Controller
{
    // public function dropdwon_cat(){
    //     $data = category::all();
    // }

    public function category_insert(Request $req)
    {
        $category_name    = $req->input('category_name');
        $description    = $req->input('description');
        $filename = $req->file('gallery')->getClientOriginalName();
        $req->file('gallery')->move(public_path('uploads/'), $filename);

        DB::table('categories')->insert([
            "category_name" => $category_name,
            "category_desc" => $description,
            "gallery" => $filename
        ]);
        return redirect('/admin/category');
    }
    public function cat_display()
    {
        $data = DB::table('categories')->get();
        return view('admin.category', ['data' => $data]);
    }

    public function product_insert(Request $req)
    {
        $product_name = $req->input('name');
        $product_description = $req->input('description');
        $price = $req->input('price');
        $quantity = $req->input('quantity');
        $category = implode(",", $req->input('category'));

        $filename = $req->file('gallery')->getClientOriginalName();
        $req->file('gallery')->move(public_path('uploads/'), $filename);

        DB::table('products')->insert([
            "name" => $product_name,
            "description" => $product_description,
            "price" => $price,
            "quantity" => $quantity,
            "category" => $category,
            "gallery" => $filename
        ]);
        return redirect('/admin/products');
    }

    public function product_display()
    {
        $categories = Category::all();
        $data = DB::table('products')->get();
        return view('admin.products', ['data' => $data, 'categories' => $categories]);
    }
    public function index()
    {
        // Retrieve user login data
        $users = DB::table('users')->get();
        return view('admin.customer', ['users' => $users]);
    }

    ///catogry display kar va 
    public function indexcat()
    {
        // Fetch all categories from the database
        $categories = Category::all(); // Assuming 'Category' is the correct model name
    
        // Pass the categories to the 'category' view
        return view('category', compact('categories'));
    }
    
    public function showcat()
    {
        // Fetch all categories from the database
        $categories = Category::all(); // Assuming 'Category' is the correct model name
    
        // Pass the categories to the 'category' view
        return view('home', compact('categories'));
    }
    
     public function count_index()
    {
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $totalUsers = User::count();

        return view('dashboard', compact('totalProducts', 'totalCategories', 'totalUsers'));
    }
    
    
}
