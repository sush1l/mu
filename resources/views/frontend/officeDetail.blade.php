@extends('layouts.master')
@section('content')

    <div class="container-fluid mt-3">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="well-heading" style="position: relative;background-color: {{$colors->nav}};">
                    <i class="fa fa-clipboard" ></i> @if(request()->language=='en'){{$officeDetail->title_en}} @else {{$officeDetail->title}} @endif
                </div>
                <p style="text-align: justify;">
                    @if(request()->language=='en')
                   {!! $officeDetail->description_en !!}
                    @else
                        {!! $officeDetail->description !!}
                    @endif
                </p>
            </div>
        </div>
    </div>
@endsection

