<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('admin.auth.login');
    }

    public function login(LoginFormRequest $request)
    {
        if(Auth::guard('admin')->attempt($request->only('email', 'password')))
        {
            $admin = Auth::guard('admin')->user();
            // Check if the admin's status is 0 (no access)
            if ($admin->status == 0) {
                Auth::guard('admin')->logout();
                return redirect()->route('admin.login')->with('error', 'You do not have access.');
            }
            
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->with('error', 'Oops! You have entered invalid credentials');
        // if (Auth::guard('admin')->attempt($request->only('email', 'password'))) {
        //     $request->session()->regenerate();
        //     return redirect()->intended(route('admin.dashboard'));
        // }
        // return back()->with('error', 'Oops! You have entered invalid credentials');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');//('/admin/login');
    }
}
