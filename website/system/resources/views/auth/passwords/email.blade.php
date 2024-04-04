@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                        <div class="btn-group interact-btn" role="group" aria-label="Basic example">
                            <button type="button" id="email_interact" onclick="email_form()" class="btn btn-secondary btn-warning interact_active"><i class="fa fa-envelope"></i> Reset by Email</button>
                            <button type="button" id="phone_interact" onclick="phone_form()" class="btn btn-secondary btn-success"><i class="fa fa-phone"></i> Reset by Phone</button>

                        </div>
                        <br>

<div id="email_verify" class="interact-show">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Please enter your registered email address." required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
</div>

                    <div id="phone_verify" class="interact-hidden">
                        <form method="POST" action="{{ route('password.reset.otp') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone No') }}</label>

                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Please enter your registered phone no."  autocomplete="phone" autofocus>

                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function email_form() {
       var email_btn = document.getElementById('email_interact');
       var phone_btn = document.getElementById('phone_interact');
       var email_sec = document.getElementById('email_verify');
       var phone_sec = document.getElementById('phone_verify');
        email_sec.classList.add("interact-show");
        email_sec.classList.remove("interact-hidden");
        phone_sec.classList.add("interact-hidden");
        phone_sec.classList.remove("interact-show");
        email_btn.classList.add("interact_active");
        phone_btn.classList.remove("interact_active");

    }
    function phone_form() {
       var email_btn = document.getElementById('email_interact');
       var phone_btn = document.getElementById('phone_interact');
       var email_sec = document.getElementById('email_verify');
       var phone_sec = document.getElementById('phone_verify');
        phone_sec.classList.add("interact-show");
        phone_sec.classList.remove("interact-hidden");
        email_sec.classList.add("interact-hidden");
        email_sec.classList.remove("interact-show");
        email_btn.classList.remove("interact_active");
        phone_btn.classList.add("interact_active");
    }
</script>
@endsection
