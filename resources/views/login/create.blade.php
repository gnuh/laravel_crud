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
            <img class="logo" src="{{asset('media/image/logo/logo.png')}}" alt="logo">
        </div>
        <!-- ./ logo -->

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br />
        @endif
        <h5>Sign in</h5>

        <!-- form -->
        <form action="{{ route('login/signin') }}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Username or email" name="username" required="" autofocus="">
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
            <hr>
            <p class="text-muted">Login with your social media account.</p>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-dribbble">
                        <i class="fa fa-dribbble"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-linkedin">
                        <i class="fa fa-linkedin"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="#" class="btn btn-floating btn-google">
                        <i class="fa fa-google"></i>
                    </a>
                </li>
            </ul>
            <hr>
            <p class="text-muted">Don't have an account?</p>
            <a href="register.html" class="btn btn-outline-light">Register now!</a>
        </form>
        <!-- ./ form -->
    </div>
@endsection
