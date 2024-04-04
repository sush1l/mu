@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Otp') }}</div>

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
                    <form method="POST" action="{{ route('password.reset.otp.verify',$user->id) }}">
                            @csrf
                            <div class="form-group row">
                                <label for="otp" class="col-md-4 col-form-label text-md-right">{{ __('OTP') }}</label>

                                <div class="col-md-6">
                                    <input id="otp" type="text" class="form-control @error('otp') is-invalid @enderror" name="otp" value="{{ old('otp') }}"  placeholder="Please enter the otp." required autocomplete="otp" autofocus>

                                    @error('otp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Validate') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                   </div>
            </div>
        </div>
    </div>
</div>
@endsection
