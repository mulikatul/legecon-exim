@extends('admin.auth.authapp')
@section('content')

<h3 class="mb-1 fw-bold">Forgot Password? 🔒</h3>
<p class="mb-4 pb-3">Enter your email and we'll send you instructions to reset your password</p>
@include('admin.auth.auth_messages')
<div class="form-style">
    <form action="{{ route('admin.forget.password.post') }}" method="post">
        @csrf
        <div class="form-group pb-3">
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            @error('email')
            <div class="input-group mb-3 error msg">
                <span>{{ $message }}</span>
            </div>
            @enderror
        </div>
        <div class="button-page pb-2">
            <button type="submit" class="btn btn-dark w-100 mt-2 login-btn">Send Reset Link</button>
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