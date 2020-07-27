@extends('base')
@section('main')
<div class="preloader" style="display: none;">
    <img class="logo" src="{{asset('media/image/logo/logo.png')}}" alt="logo">
    <img class="dark-logo" src="{{asset('media/image/logo/dark-logo.png')}}" alt="logo dark">
    <div class="preloader-icon"></div>
</div>
<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img class="logo" src="{{asset('media/image/logo/logo.png')}}" alt="logo" height="150px">
    </div>
    <!-- ./ logo -->


    <h5>Sign in</h5>

    <!-- form -->
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="username" value="{{old('username')}}">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password" required="">
        </div>
        <div class="form-group d-flex justify-content-between align-items-center">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" checked="" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember me</label>
            </div>
            <a class="small" href="recovery-password.html">Reset password</a>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
        @if (session('error'))
            <br/>
            <div class="alert alert-danger">
                {{session('error')}}
            </div><br />
        @endif

        <hr>
        <p class="text-muted">Don't have an account?</p>
        <a href="register.html" class="btn btn-outline-light">Register now!</a>
    </form>
    <!-- ./ form -->
</div>
@endsection
