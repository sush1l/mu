@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    @include('alert.alert')
                    <div class="card-header">{{ __('Activity Report') }} <a href="{{route('pcr.create')}}"
                                                                            class="btn btn-primary float-right">Add Recent Data</a></div>

                    <div class="card-body">
                        <div class="card">
                            <div class="card-header">New Records</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header">PCR</div>
                                            <div class="card-body">{{ $last24pcr }}</div>
                                        </div>


                                    </div>
                                    <div class="col-md-4"> <div class="card">
                                            <div class="card-header">Isolation</div>
                                            <div class="card-body">{{$last24isolation}}</div>
                                        </div></div>
                                    <div class="col-md-4"><div class="card">
                                            <div class="card-header">Quarantine</div>
                                            <div class="card-body">{{ $last24quarantine }}</div>
                                        </div></div>
                                </div>

                            </div>
                        </div>
                        <br>
<div class="card">
    <div class="card-header">Overall Activities</div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Total PCR</div>
                    <div class="card-body">{{$pcr}}</div>
                </div>


            </div>
            <div class="col-md-4"> <div class="card">
                    <div class="card-header">Total Isolation</div>
                    <div class="card-body">{{ $isolation}}</div>
                </div></div>
            <div class="col-md-4"><div class="card">
                    <div class="card-header">Total Quarantine</div>
                    <div class="card-body">{{ $quarantine}}</div>
                </div></div>

        </div>
    </div>
</div>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('exportPcr')}}" class="btn btn-warning btn-xs"><i class="fa fa-download"></i>&nbsp;Download Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
