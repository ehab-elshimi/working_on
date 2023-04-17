@extends('layouts.basic_masters.master_basic')
@section('content')
    <div class="hero-static">
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <!-- Sign In Block -->
                    <div class="block block-rounded block-themed mb-0">
                        <div class="block-header bg-primary-dark">
                            <h3 class="block-title">{{ __('Login') }}</h3>
                            <div class="block-options">
                                @if (Route::has('password.request'))
                                    <a class="btn-block-option font-size-sm"
                                        href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                @endif
                                <a class="btn-block-option" href="{{ route('dashboard.auth.signup') }}" data-toggle="tooltip"
                                    data-placement="left" title="New Account">
                                    <i class="fa fa-user-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="p-sm-3 px-lg-4 py-lg-5">
                                <h1 class="h2 mb-1">OneUI</h1>
                                <p class="text-muted">
                                    Welcome, please login.
                                </p>

                                <!-- Sign In Form -->
                                <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="py-3">
                                        <div class="form-group">
                                            <input type="email"
                                                class="form-control form-control-alt form-control-lg @error('email') is-invalid @enderror"
                                                id="login-username" name="email" placeholder="Email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password"
                                                class="form-control form-control-alt form-control-lg @error('password') is-invalid @enderror"
                                                id="login-password" placeholder="Password" name="password" required
                                                autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="login-remember"
                                                    name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="custom-control-label font-w400"
                                                    for="login-remember">{{ __('Remember Me') }}</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-xl-5">
                                            <button type="submit" class="btn btn-block btn-alt-primary">
                                                <i class="fa fa-fw fa-sign-in-alt mr-1"></i>{{ __('Login') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Sign In Form -->
                            </div>
                        </div>
                    </div>
                    <!-- END Sign In Block -->
                </div>
            </div>
        </div>
    </div>
@endsection
