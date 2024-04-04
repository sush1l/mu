@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    @include('alert.alert')
                    <div class="card-header">{{ __('Covid-19 Report') }}</div>
                    <div class="card-body">
                        @if(isset($errors) && $errors->any())
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    {{ $error  }}
                                    @endforeach
                            </div>
                            @endif
                        <form action="{{route('import_parsePcr')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input type="file" name="file" class="form-control">
                                <button class="btn btn-primary" type="submit">Upload</button>
                            </div>
                        </form>

                        @if(session()->has('failures'))
                            <table class="table table-danger">
                                <tr>
                                    <td>Row no</td>
                                    <td>Attribute</td>
                                    <td>Error</td>
                                    <td>Value</td>
                                </tr>
                                @foreach(session()->get('failures') as $validation)
                                    <tr>
                                        <td>{{$validation->row()}}</td>
                                        <td>{{$validation->attribute()}}</td>
                                        <td><ul>
                                                @foreach($validation->errors() as $e)
                                                    <li>{{$e}}</li>
                                                @endforeach
                                            </ul></td>
                                        <td>{{$validation->values()[$validation->attribute()]}}</td>

                                    </tr>
                                @endforeach
                            </table>
                            @endif
                        <div class="card-footer">
                            <a href="{{route('exportPcr')}}" class="btn btn-warning btn-xs"><i class="fa fa-download"></i>&nbsp;Download Report</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
