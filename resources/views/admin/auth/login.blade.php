@extends('admin.auth.authapp')
@section('content')
<h4 class="mb-1 pb-3">Welcome to LEGECON EXIM CMS! 👋</h4>
<!-- <h3 class="pb-3">Login</h3> -->
@include('admin.auth.auth_messages')
<div class="form-style">
  <form method="post" action="{{route('admin.login.submit')}}">
    @csrf
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
      @error('password')
      <div class="input-group mb-3 error msg">
        <span>{{ $message }}</span>
      </div>
      @enderror
    </div>
    <div class="d-flex align-items-center justify-content-between">
      <div><a href="{{route('admin.forgot.password.get')}}">Forget Password?</a></div>
    </div>
    <div class="button-page pb-2">
      <button type="submit" class="btn btn-dark w-100 mt-2 login-btn">Sign In</button>
    </div>
  </form>

  <div>

  </div>

</div>

@endsection