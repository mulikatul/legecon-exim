@extends('admin.auth.authapp')
@section('content')

<h3 class="mb-1 fw-bold pb-3">Reset Password 🔒</h3>
@include('admin.auth.auth_messages')
<div class="form-style">
    <form method="POST" action="{{ route('admin.reset.password.post') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group pb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            @error('email')
            <div class="input-group mb-3 error msg">
                <span>{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="form-group pb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <small><font style="color: #808080;">Password requirements: Minimum of 8 characters, including at least 1 lowercase letter, 1 uppercase letter, 1 number, and 1 special character.</font></small>
            @error('password')
            <div class="input-group mb-3 error msg">
                <span>{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="form-group pb-3">
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
            @error('password_confirmation')
            <div class="input-group mb-3 error msg">
                <span>{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="button-page pb-2">
            <button type="submit" class="btn btn-dark w-100 mt-2 login-btn">Set new password</button>
        </div>
    </form>
    <div class="text-center">
        <a href="{{ route('admin.login') }}" class="d-flex align-items-center justify-content-center">
            <i class="fa fa-angle-left mr-2"></i>
            Back to login
        </a>
    </div>
    <div>

    </div>

</div>

@endsection