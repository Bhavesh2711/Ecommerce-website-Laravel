<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('/admin/dashbord');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = Admin::where('email', $credentials['email'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashbord');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
