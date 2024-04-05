@extends('layouts.master')
@section('content')
    <section class="newsbar-section mt-2">
        <div class="container-fluid">
            <div class="newsbar-container" style="background-color: {{$colors->scroller}}">
                <div class="flex-shrink-0 newsbar-title pr-lg-3">{{__('Latest News')}}</div>
                <div class="d-block jctkr-wrapper jctkr-initialized">
                    <ul class="marquee-list">
                        <marquee onmouseover="stop()" onmouseout="start()">
                            @foreach($tickerFiles as $tickerFile)
                                <li>
                                    <a href="{{route('documentDetail',[$tickerFile->slug,'language'=>$language])}}">
                                        @if(request()->language=='en')
                                            {{$tickerFile->title_en}}
                                        @else
                                            {{$tickerFile->title}}
                                        @endif {{$tickerFile->published_date->toDateString()}}
                                        <span class="type">{{__('New')}}</span>
                                    </a>
                                </li>
                            @endforeach
                        </marquee>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="introduction mt-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div id="slider" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach($sliders as $sliderButton)
                                <button type="button" data-bs-target="#slider"
                                        data-bs-slide-to="{{$loop->index}}" class="{{$loop->first ? 'active' : ''}}"
                                        @if($loop->first) aria-current="true" @endif
                                        aria-label="Slide {{$loop->iteration}}"
                                ></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach($sliders as $slider)
                                <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                                    <img src="{{$slider->photo}}" class="d-block w-100 height-455"
                                         alt="{{$slider->title}}">
                                    <div class="carousel-caption d-none d-md-block">
                                        @if(request()->language=='en')
                                            <p>{{$slider->title_en}}</p>
                                        @else
                                            <p>{{$slider->title}}</p>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#slider"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#slider"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                {{--                <div class="col-lg-3 order-2 order-lg-3">--}}
                {{--                    <div class="row">--}}
                {{--                        <div class="col-sm-6 col-lg-12 mt-3 mt-md-0">--}}
                {{--                            <div class="card-01">--}}
                {{--                                @if($header->chief_id || $header->information_officer_id)--}}
                {{--                                    <ul class="list list-01">--}}
                {{--                                        <li>--}}
                {{--                                            @if ($header->chief_id)--}}
                {{--                                                <div class="avatar avatar-lg">--}}
                {{--                                                    <img src="{{$header->chief->photo ?? ''}}"--}}
                {{--                                                         alt="{{$header->chief->name ?? ''}}">--}}
                {{--                                                </div>--}}
                {{--                                                <div class="textbox-01">--}}
                {{--                                                    @if(request()->language=='en')--}}
                {{--                                                        <h6>{{$header->chief->name_en ?? ''}}</h6>--}}
                {{--                                                    @else--}}
                {{--                                                        <h6>{{$header->chief->name ?? ''}}</h6>--}}
                {{--                                                    @endif--}}
                {{--                                                    <p>{{__('Office head')}}</p>--}}
                {{--                                                    <p><i class="fa fa-phone"></i> {{$header->chief->phone ?? ''}}</p>--}}
                {{--                                                    <p><i class="fa fa-envelope"></i> {{$header->chief->email ?? ''}}--}}
                {{--                                                    </p>--}}
                {{--                                                </div>--}}
                {{--                                        </li>--}}
                {{--                                        @endif--}}
                {{--                                        @if ($header->information_officer_id)--}}
                {{--                                            <li>--}}
                {{--                                                <div class="avatar avatar-lg">--}}
                {{--                                                    <img src="{{$header->informationOfficer->photo ?? ''}}"--}}
                {{--                                                         alt="{{$header->informationOfficer->name ?? ''}}">--}}
                {{--                                                </div>--}}
                {{--                                                <div class="textbox-01">--}}
                {{--                                                    @if(request()->language=='en')--}}
                {{--                                                        <h6>{{$header->informationOfficer->name_en ?? ''}}</h6>--}}
                {{--                                                    @else--}}
                {{--                                                        <h6>{{$header->informationOfficer->name ?? ''}}</h6>--}}
                {{--                                                    @endif--}}
                {{--                                                    <p>{{__('Information Officer')}}</p>--}}
                {{--                                                    <p>--}}
                {{--                                                        <i class="fa fa-phone"></i> {{$header->informationOfficer->phone ?? ''}}--}}
                {{--                                                    </p>--}}
                {{--                                                    <p>--}}
                {{--                                                        <i class="fa fa-envelope"></i> {{$header->informationOfficer->email ?? ''}}--}}
                {{--                                                    </p>--}}
                {{--                                                </div>--}}
                {{--                                            </li>--}}
                {{--                                        @endif--}}
                {{--                                    </ul>--}}
                {{--                                @endif--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="col-sm-6 col-lg-12 mt-3">--}}
                {{--                            <div class="card-01 h-100">--}}
                {{--                                <h6 class="heading mb-2">--}}
                {{--                                    @if(request()->language=='en')--}}
                {{--                                        {{$officeDetail->title_en ?? ''}}--}}
                {{--                                    @else--}}
                {{--                                        {{$officeDetail->title ?? ''}}--}}
                {{--                                    @endif--}}
                {{--                                </h6>--}}
                {{--                                <p class="text-withlink">--}}
                {{--                                    @if(request()->language=='en')--}}
                {{--                                        {!! Str::words(strip_tags($officeDetail->description_en ?? ''), 50, '...') !!}--}}
                {{--                                    @else--}}
                {{--                                        {!! Str::words(strip_tags($officeDetail->description ?? ''), 50, '...') !!}--}}
                {{--                                    @endif--}}
                {{--                                    <a class="intro-title"--}}
                {{--                                       href="{{route('officeDetail',[$officeDetail->slug ?? '','language'=>$language])}}">--}}
                {{--                                        {{__('View More')}}--}}
                {{--                                    </a>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </section>

    <section class="gallery-section mt-2">
        <div class="container">
            <div class="row">
                <div class="container-fluid py-5 my-5">
                    <div class="container pt-5">
                        <div class="row g-5">
                            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                                <div class="h-100 position-relative">
                                    <img src="{{asset('storage/'.$header->cover_photo)}}" class="img-fluid rounded"
                                         alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                                <h5 class="text-primary">About Us</h5>
                                <h1 class="mb-4">
                                    @if(request()->language=='en')
                                        {{$officeDetail->title_en ?? ''}}
                                    @else
                                        {{$officeDetail->title ?? ''}}
                                    @endif</h1>
                                <p>
                                    @if(request()->language=='en')
                                        {!! Str::words(strip_tags($officeDetail->description_en ?? ''), 200, '...') !!}
                                    @else
                                        {!! Str::words(strip_tags($officeDetail->description ?? ''), 200, '...') !!}
                                    @endif
                                </p>
                                <a href="{{route('officeDetail',[$officeDetail->slug ?? '','language'=>$language])}}"
                                   class="btn btn-danger rounded-pill px-3 py-1 text-white">{{__('View More')}}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="parallax overlay">
                <div class="overlay-content">
                    <h2 class="text-white mt-0 fw-bold">Our Courses</h2>
                </div>

            </div>
        </div>
    </div>
    @include('frontend.index.document')
    {{--    <div data-aos="fade-up" class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">--}}
    {{--    <div class="container">--}}
    {{--        <div class="text-center" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">--}}
    {{--            <h5 class="section bg-intro text-center text-color px-3 mb-4">Members</h5>--}}
    {{--            --}}{{-- <h1 class="mb-3">{{ __('Photos') }}</h1> --}}
    {{--        </div>--}}
    {{--        <div data-aos="fade-up" class="Container">--}}
    {{--            <h3 class="Head">Member<span class="Arrows"></span></h3>--}}
    {{--            <!-- Carousel Container -->--}}
    {{--            <div class="SlickCarousel slick-initialized slick-slider">--}}
    {{--                <!-- Item -->--}}
    {{--                @foreach ($employees as $employee)--}}
    {{--                    <div class="ProductBlock">--}}
    {{--                        <div class="Content">--}}
    {{--                            <div class="img-fill">--}}
    {{--                                <img src="{{ $employee->photo }}">--}}
    {{--                            </div>--}}
    {{--                            <h3>{{ $employee->title }}</h3>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                @endforeach--}}
    {{--                <!-- Item -->--}}
    {{--            </div>--}}
    {{--            <!-- Carousel Container -->--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div data-aos="fade-up" class="container-xxl py-5 wow fadeInUp aos-init aos-animate" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h5 class="section bg-intro text-center text-color px-3 mb-4">Members</h5>

        </div>
        <div data-aos="fade-up" class="Container aos-init aos-animate">
            <h3 class="Head">Member<span class="Arrows"><span class="Slick-Prev slick-arrow"
                                                              style="display: inline-block;"></span><span
                        class="Slick-Next slick-arrow" style="display: inline-block;"></span></span></h3>
            <!-- Carousel Container -->

            <div class="SlickCarousel slick-initialized slick-slider">
                <!-- Item -->
                <div aria-live="polite" class="slick-list draggable">
                    <div class="slick-track"
                         style="opacity: 1; width: 10471px; transform: translate3d(-9339px, 0px, 0px); transition: transform 800ms;"
                         role="listbox">
                        <div class="ProductBlock slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true"
                             style="width: 283px;" tabindex="-1">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/5Y6UwrLXrzHrz8F9SUEnwwD4royMSHdISJ8zRgcN.jpg">
                                </div>
                                <h3>Mr. Sagar Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide slick-cloned" data-slick-index="-3" aria-hidden="true"
                             style="width: 283px;" tabindex="-1">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/rJTo628LFGzYBk1NdUfeIPHQBGYsFO3T0mTZVvi0.jpg">
                                </div>
                                <h3>Mr. Sunil Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide slick-cloned" data-slick-index="-2" aria-hidden="true"
                             style="width: 283px;" tabindex="-1">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/v0HXWerGpRXzlTJJvafYr4uYE0WsUEtjtAJIotiT.jpg">
                                </div>
                                <h3>Mr. Milan Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide slick-cloned" data-slick-index="-1" aria-hidden="true"
                             style="width: 283px;" tabindex="-1">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/yjAJjiBdKZ4T1sK9Emz3K4okcksWo8lslCUgNehj.jpg">
                                </div>
                                <h3>Ms. Upashna Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide slick-current slick-active" data-slick-index="0"
                             aria-hidden="false" style="width: 283px;" tabindex="-1" role="option"
                             aria-describedby="slick-slide00">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/x4lyN1SgRu65fQL3icGRBFU0ZuuLgpmSL9IiB54m.jpg">
                                </div>
                                <h3>Mr. Dip Narayan Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide01">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/IcLoykPNqg5R0LwLQGzXq9o8vxKotmSJtqrzKGA7.jpg">
                                </div>
                                <h3>Mr. Nimesh Lekhi</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide slick-active" data-slick-index="2" aria-hidden="false"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide02">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/KqYSuhgtaI0ihzWwpN4rooSvGYvDKA9al33eVD2G.jpg">
                                </div>
                                <h3>Mr. Binay Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide slick-active" data-slick-index="3" aria-hidden="false"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide03">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/nWxtCYYR2zCeVDgX03HXSpSYedrwAmXWWs3Hqesv.jpg">
                                </div>
                                <h3>Mr. Prithwi Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="4" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide04">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/cbfRN0Scm0UeZMQ4rrMfMFnmzdgI8pe1hn9YQLvw.jpg">
                                </div>
                                <h3>Ms. Rinku Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="5" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide05">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/n2afr9Gom109XSvVBRi1FsACiVr3ixwprsv5uP3P.jpg">
                                </div>
                                <h3>Mr. Arun Kumar Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="6" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide06">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/diA6m2ccG3Y70tgxzSKCNaFqamCtsUFF10ExtBaB.jpg">
                                </div>
                                <h3>Ms. Mishra Kumari Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="7" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide07">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/ck9LrxwSgX22bcz4ECmX0k27g59ErZAc4B3LoAbP.jpg">
                                </div>
                                <h3>Mr. Umesh Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="8" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide08">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/5G6sud5UFFe0naRXKT0KHddExzlTNZK0ExlHOkLT.jpg">
                                </div>
                                <h3>Mr. Santosh Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="9" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide09">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/zV0Fb8DHMK1D6UxSPtBKx4348oh5nBrRdCYwnIC8.jpg">
                                </div>
                                <h3>Ms. Pooja Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="10" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide010">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/LMCMezWuP8QHkPwVHqLFECaij96yxHAztugL04k3.jpg">
                                </div>
                                <h3>Mr. Siddhant Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="11" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide011">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/rWpUoDDyfdpw7y8q9C6mK5Z7dZOaVKSsKXlQdmaM.jpg">
                                </div>
                                <h3>Ms. Sunita Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="12" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide012">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/nRZhkPg4fFj1dhxg2qBjS7aRjhWx8R7zuZJNLhfS.jpg">
                                </div>
                                <h3>Ms. Sofiya Chaudhari</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="13" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide013">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/S5fseL2pujreql5DuxZUCuiqZoomLQqYh7M6pBQK.jpg">
                                </div>
                                <h3>Ms. Simrika Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="14" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide014">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/Yub5y7fkD8cSQoJVicHTFUIIfA2eTcxiRfmLbrTI.jpg">
                                </div>
                                <h3>Mr. Rameshwar Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="15" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide015">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/yX8ODsrt1lOobTZktRMzx4RMKgT7pvwcKz2lTtBq.jpg">
                                </div>
                                <h3>Mr. Durga Nanda Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="16" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide016">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/4vX3xLbHWkYP7z68Xc6J4ti2CZEeBV0qfKd8wQLP.jpg">
                                </div>
                                <h3>Ms. Januka Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="17" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide017">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/3je2C28ZUyBzJU0sCeJHfNWtSc7VdJ8vvosZ0bWe.jpg">
                                </div>
                                <h3>Mr. Madhukar Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="18" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide018">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/dhvOQAG5NxqFQf7FwopuXydlgLdiaGDrK91KSVIc.jpg">
                                </div>
                                <h3>Ms. Shruti Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="19" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide019">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/wPJ2cpNjYZL21w62rvmlt6F0tgUf81UGmcCW8hWw.jpg">
                                </div>
                                <h3>Ms. Sunam Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="20" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide020">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/mXHcBJ4FjWUZGgki5PYV2d9FDkAjccimzQ1jROUs.jpg">
                                </div>
                                <h3>Ms. Ranjana Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="21" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide021">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/n6ge2qkpbIQoXyyyhUHaPdZrc4kdEJpBN70rQohG.jpg">
                                </div>
                                <h3>Ms. Nazma Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="22" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide022">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/UaTdDMPqcRSN2m6ndfOXRf87zG8oEE7YT5y11dIr.jpg">
                                </div>
                                <h3>Ms. Sweta Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="23" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide023">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/tdHefgbdSapKwy3SQ2c8rX0GDuOqdoyiUpTAgeeQ.jpg">
                                </div>
                                <h3>Ms. Ranjana Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="24" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide024">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/RWvIRQCDpkJ67h58DF9AxZ3FyZb9B9JU5xGzzPkY.jpg">
                                </div>
                                <h3>Mr. Aryan Chaudhary Tharu</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="25" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide025">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/5Y6UwrLXrzHrz8F9SUEnwwD4royMSHdISJ8zRgcN.jpg">
                                </div>
                                <h3>Mr. Sagar Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="26" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide026">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/rJTo628LFGzYBk1NdUfeIPHQBGYsFO3T0mTZVvi0.jpg">
                                </div>
                                <h3>Mr. Sunil Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="27" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide027">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/v0HXWerGpRXzlTJJvafYr4uYE0WsUEtjtAJIotiT.jpg">
                                </div>
                                <h3>Mr. Milan Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide" data-slick-index="28" aria-hidden="true"
                             style="width: 283px;" tabindex="-1" role="option" aria-describedby="slick-slide028">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/yjAJjiBdKZ4T1sK9Emz3K4okcksWo8lslCUgNehj.jpg">
                                </div>
                                <h3>Ms. Upashna Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide slick-cloned" data-slick-index="29" aria-hidden="true"
                             style="width: 283px;" tabindex="-1">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/x4lyN1SgRu65fQL3icGRBFU0ZuuLgpmSL9IiB54m.jpg">
                                </div>
                                <h3>Mr. Dip Narayan Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide slick-cloned" data-slick-index="30" aria-hidden="true"
                             style="width: 283px;" tabindex="-1">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/IcLoykPNqg5R0LwLQGzXq9o8vxKotmSJtqrzKGA7.jpg">
                                </div>
                                <h3>Mr. Nimesh Lekhi</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide slick-cloned" data-slick-index="31" aria-hidden="true"
                             style="width: 283px;" tabindex="-1">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/KqYSuhgtaI0ihzWwpN4rooSvGYvDKA9al33eVD2G.jpg">
                                </div>
                                <h3>Mr. Binay Chaudhary</h3>
                            </div>
                        </div>
                        <div class="ProductBlock slick-slide slick-cloned" data-slick-index="32" aria-hidden="true"
                             style="width: 283px;" tabindex="-1">
                            <div class="Content">
                                <div class="img-fill">
                                    <img
                                        src="http://tharusocietysydney.org.au//storage/member/nWxtCYYR2zCeVDgX03HXSpSYedrwAmXWWs3Hqesv.jpg">
                                </div>
                                <h3>Mr. Prithwi Chaudhary</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item -->
            </div>
            <!-- Carousel Container -->
        </div>
    </div>
    <section class="gallery-section mt-2">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach($galleries as $gallery)
                            <div class="carousel-item {{$loop->first ? 'active' : ''}}">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <a href="{{route('photoGalleryDetails',[$gallery->slug,'language'=>$language])}}">
                                                <img src="{{asset('storage/'.$gallery->photos->first()->images)}}"
                                                     style="width: 100%" class="img-fluid" alt="Image">
                                            </a>
                                        </div>
                                        <div class="carousel-caption d-none d-md-block">
                                            @if(request()->language=='en')
                                                {{$gallery ->title_en}}
                                            @else
                                                {{$gallery ->title}}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev bg-transparent w-aut" href="#galleryCarousel" role="button"
                       data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next bg-transparent w-aut" href="#galleryCarousel" role="button"
                       data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <div class="container-fluid mt-5">
        <div class="row">
            <div class="parallax overlay">
                <div class="overlay-content">
                    <h2 class="text-white fw-bold">MU Convocation</h2>
                    <a href="#">
                        <button class="btn text-black">Connect with us</button>
                    </a>
                </div>
            </div>
        </div>
    </div>





    <!-- Modal -->
    @if($noticePopups->count()>0)
        <div class="modal fade" id="noticeModal" tabindex="-1" aria-labelledby="noticeModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="noticeModal"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @foreach($noticePopups as $noticePopup)

                            @foreach($noticePopup->files as $file)
                                @if($file->extension=='pdf')
                                    <iframe src="{{asset('storage/'.$file->url)}}" frameborder="0"
                                            style="width:100%;height:600px;"></iframe>
                                @else
                                    <img src="{{asset('storage/'.$file->url)}}" alt="" style="width:100%;">
                                @endif
                                <hr>
                            @endforeach
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    @endif

    @push('script')
        <script>
            const myCarousel = document.querySelector('#myCarousel');
            const carousel = new bootstrap.Carousel(myCarousel, {
                interval: 2000,
                wrap: false,
                loop: true
            });

        </script>
        <script>
            let items = document.querySelectorAll('#galleryCarousel .carousel-item')
            items.forEach((el) => {
                const minPerSlide = 4
                let next = el.nextElementSibling
                for (var i = 1; i < minPerSlide; i++) {
                    if (!next) {
                        // wrap carousel by using first child
                        next = items[0]
                    }
                    let cloneChild = next.cloneNode(true)
                    el.appendChild(cloneChild.children[0])
                    next = next.nextElementSibling
                }
            })

        </script>
        <script>
            $(document).ready(function () {
                $("#noticeModal").modal("show");
                setTimeout(function () {
                    $('#noticeModal').modal('hide');
                }, 10000);
            });
        </script>

    @endpush
@endsection
