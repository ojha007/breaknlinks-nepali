@extends('backend::auth.master')

@section('title_postfix', '| Change Password')

@section('content')
    <div class="register-box">
        <div class="register-logo">
            <img src="{{asset('/Remittance-logo.png')}}" class="logo" alt="Registered Remit" width="300px">
        </div>
        @include('backend::message')
        <div class="register-box-body">
            <p class="login-box-msg">Change Your Password</p>
            {!! Form::open(['method'=>'POST','route'=>'forget-password.changePassword']) !!}
            <div class="form-group has-feedback @error('new_password') has-error @enderror">
                {!! Form::password('new_password', array('placeholder' => 'Enter New Password',
                    'class' => 'form-control','required')) !!}
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                {!! $errors->first('new_password', '<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group has-feedback @error('confirm_password') has-error @enderror">
                {!! Form::password('confirm_password', array('placeholder' => 'Confirm Your Password',
                        'class' => 'form-control','required')) !!}
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                {!! $errors->first('confirm_password', '<span class="help-block">:message</span>') !!}
            </div>
            <button type="submit" class="btn btn-primary btn-block mt-4 mb-4 btn-flat">Change Password</button>
            {!! Form::close() !!}
        </div>

    </div>
@endsection

