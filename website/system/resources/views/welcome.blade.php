@extends('header')
@section('content')

<body style="background-color: #fff;">
    

  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row" style="padding: 5px;">
  <div class="onoffswitch3">
    <input type="checkbox" name="onoffswitch3" class="onoffswitch3-checkbox" id="myonoffswitch3" checked>
    <label class="onoffswitch3-label" for="myonoffswitch3">
        <span class="onoffswitch3-inner">
            <span class="onoffswitch3-active">
                <marquee class="scroll-text">@foreach($notice as $noticess)<a href="{{asset('storage/assets/notice/'.$noticess->notice_file)}}" style="color: red;">{{$noticess->notice_name}} ||&nbsp;&nbsp;&nbsp;      @endforeach  </marquee>
                <span class="onoffswitch3-switch">{{__('Latest News')}} </span>
            </span>
            <span class="onoffswitch3-inactive"><span class="onoffswitch3-switch">SHOW BREAKING NEWS</span></span>
        </span>
    </label>
  </div>
      </div>
    </div>
  </div>
<div class="container-fluid">
<div class="col-md-12">
  <div class="row" style="padding: 5px;">
    <div class="col-md-7">
    <div class="slider responsive" width='310' height='150'>
      @foreach($slider as $sliders) 
      <div src="{{asset('storage/assets/slider/'.$sliders->photo)}}"></div>
      
      @endforeach 
    </div>
    </div>
    <div class="col-md-5 ">
      <div class="vvi_person">
        @if ($karyalaya_pramukh) 
          <div class="vvi-In clearfix"> 
          <figure>
          <img class="img-responsive" src="{{asset('storage/assets/employee/'.$karyalaya_pramukh->employee->photo)}}" alt="Prakash Dhami"> 
          </figure>
          <div class="figcaption">
            <h4 style="font-weight: bold; color:#b31b1b;">{{__('Senior Agriculture Officer')}}</h4>
            <h4>{{$karyalaya_pramukh->employee->name}}</h4>
           
            <h5> {{$karyalaya_pramukh->employee->designations->designation_name}}</h5>
            
          </div>
        
          <div class="clearfix"></div>
        </div>
        @endif
        @if ($information_officer) 
           <div class="vvi-In clearfix"> 
          <figure>
          <img class="img-responsive" src="{{asset('storage/assets/employee/'.$information_officer->employee->photo)}}" alt="Nirmal"> 
          </figure>
          <div class="figcaption">
            <h4 style="font-weight: bold; color:#b31b1b;">{{__('Information Officer')}}</h4>
            <h4>{{$information_officer->employee->name}}</h4>
            <h5>{{$information_officer->employee->designations->designation_name}}</h5>
            <h5>{{$information_officer->employee->phone}}</h5>
            
          </div>
         <div class="clearfix"></div>
        </div>
        @endif
            </div>
    <!--tab end-->             </div>
  </div>
</div>
</div>


<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
    <div class="col-md-7">
      @foreach($office_Detail as $office_Detail)
<div class="well-heading" style=" position: relative; text-align:center; font-size:20px;">

     {{__('About Us')}}

</div>
<div class="well row" style="    margin-left: -0px;
margin-right: -0px; padding:5px;">
<!--<blockquote style="background-image: url(images/bouble.png);"><p class="rtejustify"><span style="font-size:16px"><strong><span style="font-family:tahoma,geneva,sans-serif; color: brown;">" {{__('Supportive project for the implementation of agricultural development strategy prepared from indigenous thinking, indigenous investment and internal institutional manpower')}} "</span></strong></span></p>
</blockquote>-->
<p style="font-family: kalimati; text-align: justify;"> {!! \Illuminate\Support\Str::limit($office_Detail->introduction,1900) !!} </p>

        <br>
          <a href="{{route('frontend.introduction',[\App::getLocale()])}}" class="btn btn-primary btn-xs" style="float: right;"><i class="fa fa-plus" aria-hidden="true"></i> {{__('View More')}}</a>
</div>
@endforeach 
    </div>
    <div class="col-md-5">
  
 
      <div class="well row" style="    margin-left: -0px;
      margin-right: -0px; padding:5px;">
      <p style="font-size: 14px; text-align: justify;"> <img src="{{asset('storage/assets/header/'.$header->bg_photo)}}" style=" width: 100%; height: 400px;"></p>
      
             
      </div>
  
          
                
              </div> 

 
          </div>
     
     
  </div>
     </div>
</div>
    </div>

<div class="container-fluid">
      <div class="col-md-12">
      <div class="row" style="padding: 5px;">
       <div class="col-md-12" style="padding-top: 10px;">
      <div class="row">
                       <div class="col-md-5 ">
                    <!--tab start-->
    <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">
    
      {{__('Legal documents')}}<h6 class="content_title">  <span class="pull-right"></span>
    
    </div>
    <section class="tab ">
      <header class="newspanel tab-bg-dark-navy-blue">
        <ul class="nav nav-tabs index_pg_tab ">
        
                    <li class=""> <a data-toggle="tab" href="#dwgroup1" style="color: #000 !important;">{{__('Procedure')}}</a> </li>
                        <li class=""> <a data-toggle="tab" href="#dwgroup2" style="color: #000 !important;">{{__('Acts')}}</a> </li>
                        <li class=""> <a data-toggle="tab" href="#dwgroup3" style="color: #000 !important;">{{__('Policy / Manual')}}</a> </li>
                        <li class=""> <a data-toggle="tab" href="#dwgroup4" style="color: #000 !important;">{{__('Guidelines')}}</a> </li>
                  </ul>
      </header>
      <div class="panel-body" style="min-height:450px; border:1px solid #ccc;">
        <div class="tab-content tasi-tab">
                    <div id="dwgroup1" class="tab-pane active" style=" border:1px solid #ccc;">
                <div class="about-testimonial about-flexslider boxed-style">
                  
                  <section class="fadeInRight">
                    <table class="table table-responsive table-striped downloadtable">
                      <thead>
                        <tr>
                          <th width="5%"></th>
                          <th width="75%">{{__('Title')}} </th>
                          <th width="20%">{{__('Download')}} </th>
                        </tr>
                        @foreach($dastabej->take(9) as $dastabejsss)
          @if ($dastabejsss->dastabej_category_id == 2)
                        <tr>
                          <td><img src="{{asset('images/images.png')}}" width="30"></td>
    <td>{{$dastabejsss -> dastabej_title}}</td>
    <td ><a download="{{asset('storage/assets/dastabej/'.$dastabejsss->file)}}" href="{{asset('storage/assets/dastabej/'.$dastabejsss->file)}}"><i class="fa fa-download btn btn-primary btn-xs"></i></a></td>
    </tr>
        
                        @endif 
                        @endforeach      
    
                                                
                      
    
                                       </thead></table>
                    
                          <a href="{{route('procurement',[\App::getLocale()])}}" class="btn btn-primary btn-xs pull-right">{{__('View More')}} </a>
                        
                  </section>
                </div>
              </div>
                        <div id="dwgroup2" class="tab-pane" style=" border:1px solid #ccc;">
                <div class="about-testimonial about-flexslider boxed-style">
                   
                  <section class="fadeInRight">
                    <table class="table table-responsive table-striped downloadtable">
                      <thead>
                        <tr>
                          <th width="5%"></th>
                          <th width="75%">{{__('Title')}} </th>
                          <th width="20%">{{__('Download')}} </th>
                        </tr>
                        @foreach($dastabej as $dastabejsss)
          @if ($dastabejsss->dastabej_category_id == 1)
                        <tr>
                          <td><img src="{{asset('images/images.png')}}" width="30"></td>
    <td>{{$dastabejsss -> dastabej_title}}</td>
    <td ><a download="{{asset('storage/assets/dastabej/'.$dastabejsss->file)}}" href="{{asset('storage/assets/dastabej/'.$dastabejsss->file)}}"><i class="fa fa-download btn btn-primary btn-xs"></i></a></td>
    </tr>
        
                        @endif 
                        @endforeach      
    
                                                
                      
    
                                       </thead></table>
                    
                          <a href="{{route('work',[\App::getLocale()])}}" class="btn btn-primary btn-xs pull-right">थप हेर्नुहोस्</a>
                        
                  </section>
                </div>
              </div>
                        <div id="dwgroup3" class="tab-pane" style=" border:1px solid #ccc;">
                <div class="about-testimonial about-flexslider boxed-style">
                  
                  <section class="fadeInRight">
                    <table class="table table-responsive table-striped downloadtable">
                      <thead>
                        <tr>
                          <th width="5%"></th>
                          <th width="75%">{{__('Title')}} </th>
                          <th width="20%">{{__('Download')}} </th>
                        </tr>
                        @foreach($dastabej as $dastabejsss)
          @if ($dastabejsss->dastabej_category_id == 5)
                        <tr>
                          <td><img src="{{asset('images/images.png')}}" width="30"></td>
    <td>{{$dastabejsss -> dastabej_title}}</td>
    <td ><a download="{{asset('storage/assets/dastabej/'.$dastabejsss->file)}}" href="{{asset('storage/assets/dastabej/'.$dastabejsss->file)}}"><i class="fa fa-download btn btn-primary btn-xs"></i></a></td>
    </tr>
        
                        @endif 
                        @endforeach      
    
                                                
                      
    
                                       </thead></table>
                    
                          <a href="{{route('expenditure',[\App::getLocale()])}}" class="btn btn-primary btn-xs pull-right"> थप हेर्नुहोस्</a>
                        
                  </section>
                </div>
              </div>
              <div id="dwgroup4" class="tab-pane" style=" border:1px solid #ccc;">
                <div class="about-testimonial about-flexslider boxed-style">
                 
                  <section class="fadeInRight">
                    <table class="table table-responsive table-striped downloadtable">
                      <thead>
                        <tr>
                          <th width="5%"></th>
                          <th width="75%">{{__('Title')}} </th>
                          <th width="20%">{{__('Download')}} </th>
                        </tr>
                        @foreach($dastabej as $dastabejsss)
          @if ($dastabejsss->dastabej_category_id == 4)
                        <tr>
                          <td><img src="{{asset('images/images.png')}}" width="30"></td>
    <td>{{$dastabejsss -> dastabej_title}}</td>
    <td ><a download="{{asset('storage/assets/dastabej/'.$dastabejsss->file)}}" href="{{asset('storage/assets/dastabej/'.$dastabejsss->file)}}"><i class="fa fa-download btn btn-primary btn-xs"></i></a></td>
    </tr>
        
                        @endif 
                        @endforeach      
    
                                                
                      
    
                                       </thead></table>
                    
                          <a href="{{route('annual',[\App::getLocale()])}}" class="btn btn-primary btn-xs pull-right">थप हेर्नुहोस् </a>
                        
                  </section>
                </div>
              </div>
                  </div>
      </div>
    
    </section>
    
    <!--tab end-->             </div>
    <div class="col-md-4 ">
                   <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">
    
        {{__('News/ Notices')}}<h6 class="content_title">  <span class="pull-right"></span>
    
    </div>
    <!--tab start-->
    <section class="tab ">
      <header class="newspanel tab-bg-dark-navy-blue">
        <ul class="nav nav-tabs index_pg_tab ">
                    <li class="active"> <a data-toggle="tab" href="#actgroup1" style="color: #000 !important;">{{__('News/ Notices')}}</a> </li>
                    </ul>
        </header>
        <div class="panel-body" style="min-height:450px; border:1px solid #ccc;">
          <div class="tab-content tasi-tab">
                        <div id="actgroup1" class="tab-pane active">
                  <div class="about-testimonial about-flexslider boxed-style" style="margin:0; border:1px solid #eee; min-height:246px;">
                    
                    <section class="fadeInRight">
                      <table class="table table-responsive table-striped downloadtable">
                        <thead>
                          <tr>
                            <th width="5%"></th>
                            <th width="75%">{{__('Title')}}</th>
                            <th width="20%">{{__('Download')}}</th>
                          </tr>@foreach($notice as $notices)
                                             
                                                  <tr>
                              <td><img src="{{asset('images/images.png')}}" width="30"></td>
                              <td> {{$notices->notice_name}}</td>
                              <td><a download="{{asset('storage/assets/notice/'.$notices->notice_file)}}" href="{{asset('storage/assets/notice/'.$notices->notice_file)}}"><i class="fa fa-download btn btn-primary btn-xs"></i></a></td>
    
                            </tr>
                            @endforeach                    
                               </thead></table>
    
                            
                    </section>
                  </div>
                  <a href="{{route('news',[\App::getLocale()])}}" class="btn btn-primary btn-xs pull-right">{{__('View More')}}</a>
                </div>
                    </div>
      </div>
    </section>
    <!--tab end-->             </div>
    <div class="col-md-3 ">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInRight m-b-15">
                  <!--tab start-->
     <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">
    
        {{__('Related information')}}<h6 class="content_title">  <span class="pull-right"></span>
    
    </div>
    <br>
    <!--tab end-->             </div>
              </div>
              <div class="clearall"> </div>
              <div class="row">
                <div class="col-md-12 ">
                  <!--button start-->
                  <div class="blockmenu">
                    <a href="{{route('loi',[\App::getLocale()])}}" target="blank">
                      <span class="block-icon"><img src="{{asset('images/logo.png')}}" alt="logo" class="img-responsive gov-logo pull-left " style="margin-top: 0px; margin-left: -10px; height:60px; width:60px;"></span>
                      <div class="block-content">
                        <div class="block-content-title" style="color: #fff;">{{__('Nepal Weather')}}</div>
                      </div>
                      </a>
                  </div> 
    
    <div class="blockmenu">
      <a href="{{route('faq',[\App::getLocale()])}}">
        <span class="block-icon"><i class="fa fa-question-circle"></i></span>
        <div class="block-content">
          <div class="block-content-title" style="color: #fff;">{{__('FAQ')}}</div>
        </div>
        </a>
    </div>
    <!--button end--> 
    
    <!--button start-->
    <div class="blockmenu">
      <a href="#">
        <span class="block-icon"><i class="fa fa-envelope-open-o"></i></span>
        <div class="block-content">
          <div class="block-content-title" style="color: #fff;">{{__('Check Mail')}}</div>
        </div>
        </a>
    </div>
    <!--button end--> 
    
    <!--button start-->
    <div class="blockmenu">
      <a href="{{route('bill',[\App::getLocale()])}}">
        <span class="block-icon"><i class="fa fa-calculator"></i></span>
        <div class="block-content">
          <div class="block-content-title" style="color: #fff;">{{__('Bill Publication')}}</div>
        </div>
        </a>
    </div>
    <!--button end--> 
    <div class="blockmenu">
      <a href="https://twitter.com/">
        <span class="block-icon"><i class="fa fa-twitter"></i></span>
        <div class="block-content">
          <div class="block-content-title" style="color: #fff;">{{__('Twitter Links')}}</div>
        </div>
        </a>
    </div>
    <!--button start-->
    <div class="blockmenu">
      <a href="{{route('contact',[\App::getLocale()])}}">
        <span class="block-icon"><i class="fa fa-comments"></i></span>
        <div class="block-content">
          <div class="block-content-title" style="color: #fff;">{{__('Contact Us')}}</div>
        </div>
        </a>
    </div>
    <!--button end-->             </div>
              </div>
              <div class="clearall"> </div>
            </div>
    </div>
    </div>
         </div>
    </div>
        </div>
  <div class="container-fluid">
    <div class="col-md-12">
    <div class="row">
      <div class="col-md-12" style="border: 1px solid #fff;  padding:5px; max-height: 350px; background-color:#093D63;">
        <div class="g_information"><i class="fa fa-file-image-o" aria-hidden="true" style="padding: 5px; color: #fff;">&nbsp;&nbsp;&nbsp;{{__('Gallery')}}</i><span class="btn-link"><a href="{{route('photo_gal',[\App::getLocale()])}}" class="btn btn-primary btn-xs" style="float: right;"><i class="fa fa-plus" aria-hidden="true"></i> {{__('View More')}}</a></span>
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 
  <div class="owl-slider">
  <div id="carousel" class="owl-carousel">
    @foreach($photo_album as $photo_album)
    <div class="item">
      <a href="{{route('photo_gal',[\App::getLocale()])}}"><img src="{{asset('storage/assets/photo/'.$photo_album->cover_photo)}}" style="height: 250px;"></a>
      <h5><a href="{{route('photo_gal',[\App::getLocale()])}}" style="font-size:14px; color:#fff;">{{$photo_album -> album_name}}</a></h5>
      
    </div>
    @endforeach
    </div>
  </div>
  </div>
  <script type="text/javascript">
    jQuery("#carousel").owlCarousel({
    autoplay: true,
    lazyLoad: true,
    loop: true,
    margin: 10,
     /*
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    */
    responsiveClass: true,
    autoHeight: true,
    autoplayTimeout: 4000,
    smartSpeed: 800,
    nav: true,
    responsive: {
      0: {
        items: 1
      },
  
      600: {
        items: 2
      },
  
      1024: {
        items: 3
      },
  
      1366: {
        items: 4
      }
    }
  });
  
  </script>
  </div>
    </div>
    </div>
  </div>

   <br>
@endsection