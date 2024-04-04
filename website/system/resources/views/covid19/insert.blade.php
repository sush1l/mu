@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Insert Covid 19 data') }}
                        <a href="{{route('import')}}"
                           class="btn btn-primary float-right"><i class="fa fa-download"></i>&nbsp;Bulk Upload</a></div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('covid19.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="new_cases" class="col-md-4 col-form-label text-md-right">{{ __('New Cases') }}</label>

                                <div class="col-md-6">
                                    <input id="new_cases" type="text" class="form-control @error('new_cases') is-invalid @enderror" name="new_cases" value="{{ old('new_cases') }}" required autocomplete="new_cases" autofocus>

                                    @error('new_cases')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="deaths" class="col-md-4 col-form-label text-md-right">{{ __('Deaths') }}</label>

                                <div class="col-md-6">
                                    <input id="deaths" type="text" class="form-control @error('deaths') is-invalid @enderror" name="deaths" value="{{ old('deaths') }}" required autocomplete="deaths">

                                    @error('deaths')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="healed" class="col-md-4 col-form-label text-md-right">{{ __('Healed') }}</label>

                                <div class="col-md-6">
                                    <input id="healed" type="text" class="form-control @error('healed') is-invalid @enderror" name="healed" value="{{ old('healed') }}" required autocomplete="healed">

                                    @error('healed')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="updated_date" class="col-md-4 col-form-label text-md-right">{{ __('Update Date') }}</label>

                                <div class="col-md-6">
                                    <input id="updated_date" type="text" class="form-control @error('updated_date') is-invalid @enderror" name="updated_date" value="{{ \Carbon\Carbon::today() }}" required readonly>

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
                        <a href="{{route('export')}}" class="btn btn-warning btn-xs"><i class="fa fa-download"></i>&nbsp;Download Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
