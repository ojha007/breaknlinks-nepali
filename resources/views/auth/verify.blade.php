@extends('backend::auth.master')

@section('title_postfix', '| Register')

@push('styles')
    <style>
        .title {
            font-weight: 600;
            margin-top: 20px;
            font-size: 24px
        }

        form input:focus {
            color: #0a568c;
        }

        form input {
            display: inline-block;
            width: 50px !important;
            height: 50px !important;
            text-align: center;
            /*font-weight: 600;*/
            /*color: black;*/
            /*font-size: 17px;*/
        }

        .mt-5 {
            margin-top: 3rem !important;
        }

        .mt-4 {
            margin-top: 1.5rem !important
        }

        .mb-4 {
            margin-bottom: 1.5rem !important;
        }
    </style>
@endpush
@section('content')
    <div class="register-box">
        <div class="register-logo">
            <img src="{{asset('/Remittance-logo.png')}}" class="logo" alt="Registered Remit" width="300px">
        </div>
        @include('backend::message')
        <div class="register-box-body">
            <p class="text-danger">Please check your spam if you dont receive your otp or retry again after 10 min.</p>
            <div class="title text-center">
                Verify OTP
            </div>
            {!! Form::open(['method'=>'POST','route'=> $route ?? 'email.otp.verify','class'=>'mt-5 text-center',
              'data-group-name'=>"digits", 'data-autosubmit'=>"false" ,'autocomplete'=>"off"]) !!}
            <input class="otp" type="text" id="digit-1" name="digit-1"
                   data-index="1"
                   maxlength="1"
                   data-next="digit-2" required>
            <input class="otp" type="text" id="digit-2" name="digit-2"
                   data-index="2"
                   maxlength="1"
                   data-next="digit-3" data-previous="digit-1"
                   required>
            <input class="otp" type="text" id="digit-3" name="digit-3"
                   data-index="3"
                   maxlength="1"
                   data-next="digit-4" data-previous="digit-2"
                   required>
            <input class="otp" type="text" id="digit-4" name="digit-4"
                   data-index="4"
                   maxlength="1"
                   data-next="digit-5" data-previous="digit-3"
                   required>
            <input class="otp" type="text" id="digit-5" name="digit-5"
                   data-index="5"
                   maxlength="1"
                   data-next="digit-6" data-previous="digit-4"
                   required>
            <hr class="mt-4">
            <button class='btn btn-primary btn-block mt-4 mb-4 btn-flat'>Verify</button>
            {!! Form::close() !!}
            @if(isset($route))
                <a href="{{route('forget-password.form')}}">Didn't receive OTP? Send again.</a>
            @else
                <a href="{{route('email.otp.resend')}}">Resend Email OTP</a>
            @endif
        </div>

    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function () {
            const $inp = $(".otp");
            $inp.on({
                paste(ev) {
                    const clip = ev.originalEvent.clipboardData.getData('text').trim();
                    // Allow numbers only
                    // if (!/\d{6}/.test(clip)) return ev.preventDefault(); // Invalid. Exit here
                    // Split strings to Array or characters
                    const s = [...clip];
                    // Populate inputs. Focus last input.
                    $inp.val(i => s[i]).eq(4).focus();
                },
                input(ev) { // Handle typing
                    const i = $inp.index(this);
                    if (this.value) $inp.eq(i + 1).focus();
                },
                keydown(ev) { // Handle Deleting
                    const i = $inp.index(this);
                    if (!this.value && ev.key === "Backspace" && i) $inp.eq(i - 1).focus();
                }

            });

        });

    </script>
@endpush

