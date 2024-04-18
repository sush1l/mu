@extends('layouts.master')
@section('content')
    <section class="newsbar-section mt-2">
        <div class="container-fluid">
            <div class="newsbar-container" style="background-color: {{ $colors->scroller }}">
                <div class="flex-shrink-0 newsbar-title pr-lg-3">{{ __('Latest News') }}</div>
                <div class="d-block jctkr-wrapper jctkr-initialized">
                    <ul class="marquee-list">
                        <marquee onmouseover="stop()" onmouseout="start()">
                            @foreach ($tickerFiles as $tickerFile)
                                <li>
                                    <a href="{{ route('documentDetail', [$tickerFile->slug, 'language' => $language]) }}">
                                        @if (request()->language == 'en')
                                            {{ $tickerFile->title_en }}
                                        @else
                                            {{ $tickerFile->title }}
                                        @endif {{ $tickerFile->published_date->toDateString() }}
                                        <span class="type">{{ __('New') }}</span>
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
                            @foreach ($sliders as $sliderButton)
                                <button type="button" data-bs-target="#slider" data-bs-slide-to="{{ $loop->index }}"
                                        class="{{ $loop->first ? 'active' : '' }}"
                                        @if ($loop->first) aria-current="true" @endif
                                        aria-label="Slide {{ $loop->iteration }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner">
                            @foreach ($sliders as $slider)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{ $slider->photo }}" class="d-block w-100 height-455"
                                         alt="{{ $slider->title }}">
                                    <div class="carousel-caption d-none d-md-block text-center">
                                        @if (request()->language == 'en')
                                            <span>{{ $slider->title_en }}</span>
                                        @else
                                            <span>{{ $slider->title }}</span>
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
                {{--
                  <div class="col-lg-3 order-2 order-lg-3">
                                    <div class="row">
                                        <div class="col-sm-6 col-lg-12 mt-3 mt-md-0">
                                            <div class="card-01">
                                                @if ($header->chief_id || $header->information_officer_id)
                                                    <ul class="list list-01">
                                                        <li>
                                                            @if ($header->chief_id)
                                                                                <div class="avatar avatar-lg">
                                                                                    <img src="{{$header->chief->photo ?? ''}}"
                                                                                         alt="{{$header->chief->name ?? ''}}">
                                                                                </div>
                                                                                <div class="textbox-01">
                                                                                    @if (request()->language == 'en')
                                                                                        <h6>{{$header->chief->name_en ?? ''}}</h6>
                                                                                    @else
                                                                                        <h6>{{$header->chief->name ?? ''}}</h6>
                                                                                    @endif
                                                                                    <p>{{__('Office head')}}</p>
                                                                                    <p><i class="fa fa-phone"></i> {{$header->chief->phone ?? ''}}</p>
                                                                                    <p><i class="fa fa-envelope"></i> {{$header->chief->email ?? ''}}
                                                                                    </p>
                                                                                </div>
                                                        </li>
                                                        @endif
                                                        @if ($header->information_officer_id)
                                                            <li>
                                                                <div class="avatar avatar-lg">
                                                                    <img src="{{$header->informationOfficer->photo ?? ''}}"
                                                                         alt="{{$header->informationOfficer->name ?? ''}}">
                                                                </div>
                                                                <div class="textbox-01">
                                                                    @if (request()->language == 'en')
                                                                        <h6>{{$header->informationOfficer->name_en ?? ''}}</h6>
                                                                    @else
                                                                        <h6>{{$header->informationOfficer->name ?? ''}}</h6>
                                                                    @endif
                                                                    <p>{{__('Information Officer')}}</p>
                                                                    <p>
                                                                        <i class="fa fa-phone"></i> {{$header->informationOfficer->phone ?? ''}}
                                                                    </p>
                                                                    <p>
                                                                        <i class="fa fa-envelope"></i> {{$header->informationOfficer->email ?? ''}}
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-12 mt-3">
                                            <div class="card-01 h-100">
                                                <h6 class="heading mb-2">
                                                    @if (request()->language == 'en')
                                                        {{$officeDetail->title_en ?? ''}}
                                                    @else
                                                        {{$officeDetail->title ?? ''}}
                                                    @endif
                                                </h6>
                                                <p class="text-withlink">
                                                    @if (request()->language == 'en')
                                                        {!! Str::words(strip_tags($officeDetail->description_en ?? ''), 50, '...') !!}
                                                    @else
                                                        {!! Str::words(strip_tags($officeDetail->description ?? ''), 50, '...') !!}
                                                    @endif
                                                    <a class="intro-title"
                                                       href="{{route('officeDetail',[$officeDetail->slug ?? '','language'=>$language])}}">
                                                        {{__('View More')}}
                                                    </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                --}}

            </div>
        </div>
    </section>

    <section class="gallery-section mt-2">
        <div class="container">
            <div class="row">
                <div class="container-fluid">
                    <div class="container pt-5">
                        <div class="row g-5">
                            <div class="col-lg-5 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".3s">
                                <div class="h-100 position-relative" style="margin-top: 65px">
                                    <img src="{{ asset('storage/' . $header->cover_photo) }}" class="img-fluid rounded"
                                         alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 col-sm-12 wow fadeIn" data-wow-delay=".5s">
                                <h3 class="mb-4">
                                    @if (request()->language == 'en')
                                        {{ $officeDetail->title_en ?? '' }}
                                    @else
                                        {{ $officeDetail->title ?? '' }}
                                    @endif
                                </h3>
                                <p style="text-align: justify;">
                                    @if (request()->language == 'en')
                                        {!! Str::words(strip_tags($officeDetail->description_en ?? ''), 200, '...') !!}
                                    @else
                                        {!! Str::words(strip_tags($officeDetail->description ?? ''), 200, '...') !!}
                                    @endif
                                </p>
                                <a href="{{ route('officeDetail', [$officeDetail->slug ?? '', 'language' => $language]) }}"
                                   class="btn btn-danger rounded-pill px-3 py-1 text-white">{{ __('View More') }}</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <div class="parallax overlay">
        <div class="container my-3">
            <div class="overlay-content" style="padding-top: 70px !important;">
                <h2 class="text-white mt-0 fw-bold fs-5">{{ __('Our Courses') }}</h2>
                <h6 class="text-white fw-bold fs-5">{{ __('Find Best Courses For Yourself') }}</h6>
            </div>
            <div id="courseCarousel" class="carousel slide" data-bs-ride="carousel">
                @foreach ($courses as $course)
                    <div class="carousel-item  {{ $loop->first ? 'active' : '' }} mt-5">
                        <div class="col-md-3 mx-1 my-2">
                            <div class="card">
                                <div class="avatar avatar-lg">
                                    <img src="{{$course->icon ?? ''}}"
                                         alt="">
                                </div>
                                <div class="textbox-01 text-center">
                                    @if (request()->language == 'en')
                                        <h6>{{$course->title ?? ''}}</h6>
                                    @else
                                        <h6>{{$course->title_en ?? ''}}</h6>
                                    @endif
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </div>


    {{--
         <div class="parallax overlay">
            <div class="container my-3">
                <div class="overlay-content" style="padding-top: 70px !important;">
                    <h2 class="text-white mt-0 fw-bold fs-5">{{ __('Our Courses') }}</h2>
                    <h6 class="text-white fw-bold fs-5">{{ __('Find Best Courses For Yourself') }}</h6>
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($courses as $course)
                        <div class="carousel-item active {{ $loop->first ? 'active' : '' }}">
                            <div class="col-md-3 mx-2 my-2">
                                <div class="card">
                                    <div class="image-wrapper">
                                        <img src="{{ $course->icon ?? '' }}" style="width: 100%" class="img-fluid"
                                        alt="Image">
                                    </div>
                                    <div class="carousel-caption d-md-block" style="color: black;">
                                        @if (request()->language == 'en')
                                            {{ $course->title_en }}
                                        @else
                                            {{ $course->title }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    --}}


    @include('frontend.index.document')


    <section class="gallery-section mt-2">
        <div class="Container-fluid">
            <div class="well-heading fw-bold fs-5" style="position: relative;background-color: #2b6eb5;">
                {{ __('Our Staff') }}
                <h6 class="content_title"><span class="pull-right"></span></h6>
            </div>
            <!-- Carousel Container -->
            <div class="SlickCarousel">
                @foreach ($employees as $employee)
                    <div class="ProductBlock">
                        <div class="Content">
                            <div class="img-fill">
                                <img src="{{ $employee->photo ?? '' }}" alt="">
                            </div>
                            <h3>{{ $employee->name }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- Carousel Container -->
        </div>
    </section>


    <section class="gallery-section mt-2">
        <div class="container-fluid">
            <div class="well-heading fw-bold fs-5" style="position: relative;background-color: #2b6eb5;">
                {{ __('Photo Gallery') }}
                <h6 class="content_title"><span class="pull-right"></span></h6>
            </div>
            <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">

                    @foreach ($galleries as $gallery)

                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-img">
                                        <a
                                            href="{{ route('photoGalleryDetails', [$gallery->slug, 'language' => $language]) }}">
                                            <img src="{{ asset('storage/' . $gallery->photos->first()->images) }}"
                                                 style="width: 100%" class="img-fluid" alt="Image">
                                        </a>
                                    </div>
                                    <div class="carousel-caption d-none d-md-block">
                                        {{$loop->iteration}}
                                        @if (request()->language == 'en')
                                            {{ $gallery->title_en }}
                                        @else
                                            {{ $gallery->title }}
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
    </section>


    <div class="container-fluid mt-5">
        <div class="row">
            <div class="parallax overlay">
                <div class="overlay-content">
                    <h2 class="text-white fw-bold">HMC Convocation</h2>
                    <a href="#">
                        <button class="btn text-black">Connect with us</button>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal -->
    @if ($noticePopups->count() > 0)
        <div class="modal fade" id="noticeModal" tabindex="-1" aria-labelledby="noticeModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="noticeModal"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @foreach ($noticePopups as $noticePopup)
                            @foreach ($noticePopup->files as $file)
                                @if ($file->extension == 'pdf')
                                    <iframe src="{{ asset('storage/' . $file->url) }}" frameborder="0"
                                            style="width:100%;height:600px;"></iframe>
                                @else
                                    <img src="{{ asset('storage/' . $file->url) }}" alt="" style="width:100%;">
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
            const galleryCarousel = document.querySelector('#galleryCarousel');

            const galleryCarouselInstance = new bootstrap.Carousel(galleryCarousel, {
                interval: 2000,
                wrap: false,
                loop: true
            });

            let items = document.querySelectorAll('#galleryCarousel .carousel-item')
            items.forEach((el) => {
                const minPerSlide = 4
                let next = el.nextElementSibling
                for (let i = 1; i < minPerSlide; i++) {
                    if (!next) {
                        // wrap carousel by using first child
                        next = items[0]
                    }
                    let cloneChild = next.cloneNode(true)
                    el.appendChild(cloneChild.children[0])
                    next = next.nextElementSibling
                }
            })
            const courseCarousel = document.querySelector('#courseCarousel');

            const courseCarouselInstance = new bootstrap.Carousel(courseCarousel, {
                interval: 2000,
                wrap: false,
                loop: true
            });

            let courseItems = document.querySelectorAll('#courseCarousel .carousel-item')
            courseItems.forEach((el) => {
                const minPerSlide = 4
                let next = el.nextElementSibling
                for (let i = 1; i < minPerSlide; i++) {
                    if (!next) {
                        // wrap carousel by using first child
                        next = courseItems[0]
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
