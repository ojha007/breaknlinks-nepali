@extends('backend::auth.master')

@section('title_postfix', '| Register')

@section('content')
    <div class="register-box">
        <div class="register-logo">
            <img src="{{asset('/Remittance-logo.png')}}" class="logo" alt="Registered Remit" width="300px">
        </div>
        @include('backend::message')
        <div class="register-box-body">
            <p class="login-box-msg">Enter your registered email.we will send you a otp to verify your email</p>
            {!! Form::open(['method'=>'POST','route'=>'password.email']) !!}
            <div class="form-group has-feedback @error('email') has-error @enderror">
                {!! Form::text('email', null, array('placeholder' => 'Enter Your Email Address','class' => 'form-control','required'=>'true')) !!}
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4 mb-4 btn-flat">Reset Password</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection

