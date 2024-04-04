@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    @include('alert.alert')
                    <div class="card-header">{{ __('Covid-19 Report') }} <a href="{{route('covid19.create')}}"
                                                                            class="btn btn-primary float-right">Add Recent Data</a></div>

                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">New Records</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">New Cases</div>
                                            <div class="card-body">{{ $last24cases }}</div>
                                        </div>


                                    </div>
                                    <div class="col-md-4"> <div class="card">
                                            <div class="card-header">Healed</div>
                                            <div class="card-body">{{$last24deaths}}</div>
                                        </div></div>
                                    <div class="col-md-4"><div class="card">
                                            <div class="card-header">Deaths</div>
                                            <div class="card-body">{{ $last24healed }}</div>
                                        </div></div>
                                </div>

                            </div>
                        </div>
                        <br>
<div class="card">
    <div class="card-header">Total Cases</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Total Cases</div>
                    <div class="card-body">{{$new_cases}}</div>
                </div>


            </div>
            <div class="col-md-3"> <div class="card">
                    <div class="card-header">Total Healed</div>
                    <div class="card-body">{{ $healed}}</div>
                </div></div>
            <div class="col-md-3"><div class="card">
                    <div class="card-header">Total Deaths</div>
                    <div class="card-body">{{ $deaths}}</div>
                </div></div>
            <div class="col-md-3"><div class="card">
                    <div class="card-header">Total Infected</div>
                    <div class="card-body">{{$new_cases - ($healed + $deaths)}}</div>
                </div></div>
        </div>
    </div>
</div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('export')}}" class="btn btn-warning btn-xs"><i class="fa fa-download"></i>&nbsp;Download Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
