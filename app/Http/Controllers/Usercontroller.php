<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $req)
    {
        $user = User::where(['email' => $req->email])->first();
        $admin = Admin::where(['email' => $req->email])->first();

        if (!$user && !$admin) {
            return "User with this email does not exist.";
        }

        if ($user && Hash::check($req->password, $user->password)) {
            $req->session()->put('user', $user);
            return redirect('/');
        }

        if ($admin && Hash::check($req->password, $admin->password)) {
            $req->session()->put('admin', $admin);
            return redirect('/admin/dashbord');
        }

        return "Password is incorrect.";
    }

    function register(Request $req)
    {
        // Assuming this is a user registration method
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }
}
