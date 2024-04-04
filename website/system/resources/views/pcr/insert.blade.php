@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Insert ')}}{{\Carbon\Carbon::today()->toDateString()}}{{(' Activity data') }}
                        <a href="{{route('importPcr')}}"
                           class="btn btn-primary float-right"><i class="fa fa-download"></i>&nbsp;Bulk Upload</a></div>

                    <div class="card-body">
                        @include('alert.alert')
                        <form method="POST" action="{{ route('pcr.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="pcr" class="col-md-4 col-form-label text-md-right">{{ __('PCR Tests') }}</label>

                                <div class="col-md-6">
                                    <input id="pcr" type="text" class="form-control @error('pcr') is-invalid @enderror" name="pcr" value="{{ old('pcr') }}" required autocomplete="pcr" autofocus>

                                    @error('pcr')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="isolation" class="col-md-4 col-form-label text-md-right">{{ __('Isolation') }}</label>

                                <div class="col-md-6">
                                    <input id="isolation" type="text" class="form-control @error('isolation') is-invalid @enderror" name="isolation" value="{{ old('isolation') }}" required autocomplete="isolation">

                                    @error('isolation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="quarantine" class="col-md-4 col-form-label text-md-right">{{ __('Quarantine') }}</label>

                                <div class="col-md-6">
                                    <input id="quarantine" type="text" class="form-control @error('quarantine') is-invalid @enderror" name="quarantine" value="{{ old('quarantine') }}" required autocomplete="quarantine">

                                    @error('quarantine')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="updated_date" class="col-md-4 col-form-label text-md-right">{{ __('Update Date') }}</label>

                                <div class="col-md-6">
                                    <input id="updated_date" type="text" class="form-control @error('updated_date') is-invalid @enderror" name="updated_date" value="{{ \Carbon\Carbon::today()->toDateString() }}" required readonly>

                                    @error('healed')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Submit') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('exportPcr')}}" class="btn btn-warning btn-xs"><i class="fa fa-download"></i>&nbsp;Download Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
