@extends('auth.master')

@section('title_postfix', ' | Login')

@section('content')
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                           placeholder="Email"
                           name="email"
                           value="{{ old('email') }}" required
                           autocomplete="email" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password"
                           class="form-control @error('password') is-invalid @enderror"
                           name="password"
                           placeholder="Password"
                           required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>


            <!-- /.social-auth-links -->

            <p class="mb-1">
                <a href="#">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="#" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
    {{--    <div class="login-box">--}}
    {{--        <div class="login-logo">--}}
    {{--            <img src="{{asset('backend/images/logo.png')}}" class="logo" alt="Registered Remit" width="300px">--}}
    {{--        </div>--}}
    {{--        <!-- /.login-logo -->--}}
    {{--        <div class="login-box-body">--}}
    {{--            <p class="login-box-msg">Sign in to start your session</p>--}}

    {{--            <form action="{{ route('login') }}" method="post">--}}
    {{--                @csrf--}}
    {{--                <div class="form-group has-feedback">--}}
    {{--                    <input id="email" type="email"--}}
    {{--                           class="form-control @error('email') is-invalid @enderror" name="email"--}}
    {{--                           value="{{ old('email') }}" required autocomplete="email" autofocus--}}
    {{--                           placeholder="Email">--}}
    {{--                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>--}}

    {{--                </div>--}}
    {{--                <div class="form-group has-feedback">--}}
    {{--                    <input id="password" type="password"--}}
    {{--                               class="form-control @error('password') is-invalid @enderror"--}}
    {{--                               name="password"--}}
    {{--                               placeholder="Password"--}}
    {{--                               required autocomplete="current-password">--}}


    {{--                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>--}}
    {{--                </div>--}}
    {{--                <div class="row">--}}
    {{--                    <div class="col-xs-8">--}}
    {{--                        <div class="checkbox icheck">--}}
    {{--                            <input class="form-check-input" type="checkbox" name="remember"--}}
    {{--                                   id="remember" {{ old('remember') ? 'checked' : '' }}>--}}
    {{--                            <label class="form-check-label" for="remember">--}}
    {{--                                {{ __('Remember Me') }}--}}
    {{--                            </label>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <!-- /.col -->--}}
    {{--                    <div class="col-xs-4">--}}
    {{--                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>--}}
    {{--                    </div>--}}
    {{--                    <!-- /.col -->--}}
    {{--                </div>--}}
    {{--            </form>--}}
    {{--            @if (Route::has('password.request'))--}}
    {{--                <a href="#" class="text-center" style="margin-bottom: 1px">--}}
    {{--                    {{ __('Forgot Your Password?') }}--}}
    {{--                </a>--}}

    {{--            @endif--}}
    {{--            <p></p>--}}
    {{--            <a href=#" class="text-center">Register a new membership</a>--}}

    {{--        </div>--}}
    {{--        <!-- /.login-box-body -->--}}
    {{--    </div>--}}
@endsection

