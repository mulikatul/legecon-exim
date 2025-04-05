<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ResetPasswordFormRequest;
use App\Models\Admin;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class PasswordController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('admin.auth.forgot_password');
    }

    public function sendPasswordResetToken(Request $request)
    {

        $status = Password::broker('admins')->sendResetLink(
            $request->only('email')

        );

        return $status === Password::RESET_LINK_SENT
            ? redirect()->route('admin.login')->with('message', __($status))
            : back()->with(['error' => __($status)]);
    }

    public function showPasswordResetForm($token)
    {
        return view('admin.auth.reset_password', ['token' => $token]);
    }

    public function resetPassword(ResetPasswordFormRequest $request)
    {
        $status = Password::broker('admins')->reset(
            $request->only('email', 'password', 'token'),
            function (Admin $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ]);

                $user->save();
            }
        );

        return $status === Password::PasswordReset
            ? redirect()->route('admin.login')->with('message', __($status))
            : back()->with('error' , 'Invalid token!');
    }
}
