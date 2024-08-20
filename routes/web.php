<?php
use App\Http\Controllers\Usercontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productcontroller;
use Illuminate\Contracts\Session\Session;
use App\Http\Controllers\StripePaymentController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\Categorycontroller;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CouponController;
use App\Http\Livewire\RegistrationForm;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/logout', function () {
    session()->forget('user');
    return redirect('login');
});
Route ::view("/register",'register');
Route::post("/register",[Usercontroller::class,'register']);


Route::post("/login",[Usercontroller::class,'login']);
Route::get("/",[Productcontroller::class,'index']);


Route::get("detail/{id}",[Productcontroller::class,'detail']);
Route::get("search",[Productcontroller::class,'search']);
Route::post("add_to_cart",[Productcontroller::class,'addToCart']);
Route::get("cartlist",[Productcontroller::class,'cartlist']);
Route::get("removecart/{id}",[Productcontroller::class,'removeCart']);
Route::get("ordernow",[Productcontroller::class,'orderNow']);

Route::post("orderplace",[Productcontroller::class,'orderPlace']);
Route::get("myorders",[Productcontroller::class,'myOders']);


Route::controller(StripePaymentController::class)->group(function(){
    Route::get('stripe', 'stripe');
    Route::post('stripe', 'stripePost')->name('stripe.post');
});

Route::get('/contact', [ContactUsFormController::class, 'createForm']);
Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/category', function () {
    return view('category');
});

Route::get('/sider', function () {
    return view('admin/sider');
});

Route::get('/admin/products', function () {
    return view('admin/products');
});

Route::get('/admin/category', function () {
    return view('admin/category');
});
Route::get('/topheader', function () {
    return view('admin/topheader');
});
Route::get('/users', function () {
    return view('admin/users');
});
Route::get('/admin/dashbord', function () {
    return view('admin/dashbord');
});
Route::get('/admin/order', function () {
    return view('admin/order');
});
Route::get('/admin/coupon/index', function () {
    return view('admin/coupon/index');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});
//category
Route::post('/admin/category_insert', [Categorycontroller::class, 'category_insert']);
Route::get('/admin/category',[Categorycontroller::class,'cat_display']);


//product
Route::post('/admin/product_insert', [Categorycontroller::class, 'product_insert']);
Route::get('/admin/products',[Categorycontroller::class,'product_display']);
// Route::get('/',[Categorycontroller::class,'dropdwon_cat']);

Route::get('/category', [CategoryController::class, 'indexcat'])->name('category');
Route::get('/home', [CategoryController::class, 'showcat'])->name('home');


Route::get('/admin/users', function () {
    $users = DB::table('users')->get();
    return view('admin.users', ['users' => $users]);
}); 

Route::get('/admin/order', function () {
    $orders = DB::table('orders')->get();
    return view('admin.order', ['orders' => $orders]);
}); 
Route::get('/product', function () {
    return view('product');
});


Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('charts', [HomeController::class, 'chartjs']);


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::resource('coupons', CouponController::class);

Route::get('/admin/coupons', [CouponController::class, 'index'])->name('admin.coupons.index');
Route::get('/admin/coupons/create', [CouponController::class, 'create'])->name('admin.coupons.create');
Route::post('/admin/coupons', [CouponController::class, 'store'])->name('admin.coupons.store');



Route::get('/register', RegistrationForm::class)->name('register');

