@extends('layouts.master')
@section('content')
    <div class="container-fluid mt-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('welcome')}}"><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">{{__('Our Courses')}}</li>
            </ol>
        </nav>
    </div>
    <div class="container-fluid mt-2">
        <div class="well-heading" style=" position: relative;background-color: {{$colors->nav}};">
            <i class="fa fa-book"></i>{{__('Our Courses')}}<h6 class="content_title">  <span class="pull-right"></span>
            </h6>
        </div>
        <div class="row">
            <div class="col-md-12">
                @foreach($courses as $course)
                    <div class="col-md-12">
                        <h4 class="text-center mt-3">{{$course->title}}</h4>
                        <p class="text-align-justify">{!! $course->description !!}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
