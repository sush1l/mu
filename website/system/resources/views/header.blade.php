<!DOCTYPE html>
<html>
<head>
    <title>{{$header->ministry}}</title>
   <link rel="icon" type="image/png" href="{{asset('images/logo.png')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/poly/style.css')}}">
       <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/poly/app.css')}}">
   <link href="{{asset('assets/poly/packages/font-awesome-4.5.0/css/font-awesome.min.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
 <link
    href="{{asset('assets/css/nepali.datepicker.v3.1.min.css')}}"
    rel="stylesheet"
    type="text/css"/>


    @livewireStyles

</head>
<style>
    @media (min-width: 768px){

        .icon-bar {
          position: fixed;
          top: 50%;
          -webkit-transform: translateY(-50%);
          -ms-transform: translateY(-50%);
          transform: translateY(-50%);
        }
        @font-face{
          font-family: Chandra Head;
          src: url(chandra.ttf)
        }

        .icon-bar a {
          display: block;
          text-align: center;
          padding: 16px;
          transition: all 0.3s ease;
          color: white;
          font-size: 20px;
        }

        .icon-bar a:hover {
          background-color: #000;
        }

    }
        .facebook {
          background: #3B5998;
          color: white;
        }

        .twitter {
          background: #55ACEE;
          color: white;
        }

        .android {
          background: #A4C639;
          color: white;
        }

        .youtube {
          background: #bb0000;
          color: white;
        }

        .content {
          margin-left: 75px;
          font-size: 30px;
        }

        .container.header-custome {
            text-align: center;
            color: #346cbe;
        }
        .footer-fixed-panel{
                /*background: #000; */
                position: fixed;
                top: 100%;
                -webkit-transform: translateY(-100%);
                -ms-transform: translateY(-100%);
                transform: translateY(-100%);

        }
        @media  only screen and (max-width: 990px) {
          footer { margin-bottom:40px; }
        }

    </style>

     <style type="text/css">
    .blink_me {
      animation: blinker 1s linear infinite;
    }

    .blink_me_slow {
      animation: blinker 3s linear infinite;
    }

    @keyframes  blinker {
      50% {
        opacity: 0;
      }
    }
.navbar-default {
    background-color: #093D63;
    border-color: #d3e0e9;
}
.dropdown-menu>li>a {
    font-weight: 400;
    color: #fff;
}
.navbar-default .navbar-nav>li>a, .navbar-default .navbar-text {
    color: #fbfbfb;
    
}
    .navbar-brand {
        height: 60px;
        line-height: 60px;
        padding-top: 0px;
        padding-left: 15px;
        display: inline-block;
        margin-bottom: 5px;
    }
    @media (min-width: 768px){
        .navbar-brand {
            height: 60px;
            line-height: 60px;
            padding-top: 0px;
            padding-left: 15px;
            display: inline-block;
            margin-bottom: 5px;
        }
    }
    .navbar-brand h6 {
        color: white;
    }
    .navbar-brand h6:hover {
        color: #cbf0ff;
    }
    .dropdown-menu>li>a
    {
        font-weight: bold;
    }
    .header-custome .logo {
        float: left;
        margin-top: -22%;
        width: 40%;
        margin-left: 35%;
    }

    .container.header-custome
    {
        
        color: #a52a29;
    }
    .header-custome strong { font-size:18px;  }
    span.custome-ministry-text {
        margin-top: 0px;
        font-size: 20px;
        font-weight: bold;
    }
    img.flag {
        float: right;
        margin-top: -111px;
        margin-right: 0%;
        width: 20%;
        max-width: 85px;
    }
    .gov-logo {
        margin: 40px -100px 12px 10px;
    } 
    .header { 
 background-color: #004A89; }

 ::-webkit-scrollbar {
  width: 5px;
}
.navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 22px;
    border: 0px solid transparent;
}
.example_f {
   border-radius: 4px;
   background-color: #834CDF;
background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);
border: none;
   color: #FFFFFF;
   text-align: center;
   text-transform: uppercase;
   font-size: 22px;
   padding: 20px;
   width: 200px;
   transition: all 0.4s;
   cursor: pointer;
   margin: 5px;
 }
 .example_f span {
   cursor: pointer;
   display: inline-block;
   position: relative;
   transition: 0.4s;
 }
 .example_f span:after {
   content: '\00bb';
   position: absolute;
   opacity: 0;
   top: 0;
   right: -20px;
   transition: 0.5s;
 }
 .example_f:hover span {
   padding-right: 25px;
 }
 .example_f:hover span:after {
   opacity: 1;
   right: 0;
 }
 .table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

</style>
<body >
  <div class="container-fluid">
    <div class="row" style="color:#fff; background: #093D63; padding: 5px; height: 30px;">
  <div class="col-md-12">
    
     <div class="col-md-4">
       <span style=" height:20px; width:310px; display:block;" class="pull-right hidden-sm hidden-xs">
          <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="https://www.ashesh.com.np/linknepali-time.php?time_only=no&font_color=fff&aj_time=yes&font_size=14&line_brake=0&bikram_sambat=0&api=741198k444" width="308" height="22"></iframe>
          </span>
     
    
     <script type="text/javascript">
       var currentdate = new Date();
var datetime = "Last Sync: " + currentdate.getDay() + "/" + currentdate.getMonth() 
+ "/" + currentdate.getFullYear() + " @ " 
+ currentdate.getHours() + ":" 
+ currentdate.getMinutes() + ":" + currentdate.getSeconds();

     </script>
</div>
<div class="col-md-4" style="float: left;" >

  <li class="pull-right hidden-sm hidden-xs" style="margin: -15px;list-style-type: none;" > 
    @include('search.search')
  </li>
 
</div>
<div class="col-md-4" style="float: right;">
  <li class="" style="list-style: none;" class="pull-right hidden-sm hidden-xs">
    <a class="dropdown-item" href="/en" style="float: right; text-align:right; color:#fff;">&nbsp;<img src="{{asset('images/en_flag.png')}}" width="20px" height="20x"> English</a>	
    <a class="dropdown-item" href="/ne" style="float: right; text-align:right; color:#fff;"><img src="{{asset('images/nep_flag.png')}}" width="20px" height="20x"> Nepali</a>
  </li>
  </div>
</div>
</div>
</div>

            <header style="background-color:#fff;">

    <div class="container">
        <div class="container header-custome" >
          <div class="col-md-12">
                <div class="row">
                  <div class="col-md-3">
            <a href="#">
                <img src="{{asset('images/logo.png')}}" alt="logo" class="img-responsive gov-logo pull-left hidden-xs" height="120" width="110">
            </a>
                

                
                
            <a href="#">
                <center>
                    <img src="{{asset('images/logo.png')}}" alt="logo" class="img-responsive visible-xs" style="text-align: center; margin-top:10px; margin-bottom:-15px" height="52" width="52">
                </center>
            </a>
          </div>
            <br>
           <div class="col-md-6">
          <!-- <p style="font-size: 14px; font-weight: bold; margin: 0 0 0px;">{{__('Government of Nepal')}}</p>-->
           <p style="font-size: 14px; font-weight: bold; margin: 0 0 0px;">{{__('Government of Karnali Province')}}</p>
           <p style="font-size: 14px; font-weight: bold; margin: 0 0 0px;">{{__('Ministry Of Land Management, Agriculture & Co-operative')}}</p>
                 <p style="font-size: 14px; font-weight: bold; margin: 0 0 0px;">{{__('Directorate of Agriculture Development')}}</p>
                   <p style="font-size: 26px; font-weight: bold; margin: 0 0 0px;">{{__('Agriculture Development Office')}}</p>
                   <p style="font-size: 14px; font-weight: bold; margin: 0 0 0px;">{{__('Rukum (West)')}}</p>
                    </div>
                    <br>

                    <div class="col-md-3">  
                         
 <span class="pull-right hidden-sm hidden-xs" >
                <img src="{{asset('images/nepal_flag.gif')}}" class="flag" style="max-width: 75px; width:90px; margin-top:0px;">
                
            </span>
           
                </div>
              </div>
            </div>
            </div>
    </div>
<style>
  .navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover {
    color: #555;
    background-color: #004A89;
}
body {
    font-family: Arial, Helvetica, sans-serif;
  
}
</style>
<div class="header">
        <div class="container-fluid">
          <div class="row" style="color:#fff; background: #004A89; ">
            <nav class="navbar navbar-default " style="margin-bottom: 0px; margin:0; padding:0; text-align: center;">

                <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left pull-left">
                        <li class="active"><a href="/"><i class="fa fa-home"></i></a></li>

                        <li class=""><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color: #fff;">{{__('About Us')}}<span class="caret"></span></a>
                            <ul role="menu"  class=" dropdown">
                                                                <li><a href="{{route('frontend.introduction',[\App::getLocale()])}}">{{__('Introduction')}}</a></li>
          <li><a href="{{route('institution',[\App::getLocale()])}}">{{__('Work Detail')}}</a></li>
          <li><a href="{{route('c_charter',[\App::getLocale()])}}">{{__('Organization Structure')}} </a></li>
          <li><a href="{{route('team',[\App::getLocale()])}}">{{__('Employee Detail')}}</a></li>
          <li><a href="{{route('exteam',[\App::getLocale()])}}">{{__('Ex Office Chief')}}</a></li>
         
          <li><a href="{{route('darbandi',[\App::getLocale()])}}">{{__('Darbandi')}}</a></li>
            <li><a href="{{route('wadapatra',[\App::getLocale()])}}">{{__('Citizen Charter')}}</a></li>

                            </ul>
                        </li>
                        <!--<li class=""><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color: #fff;">{{__('Legal documents')}}<span class="caret"></span></a>
                            <ul role="menu" class="dropdown">
                                                                <li><a href="{{route('ranniti',[\App::getLocale()])}}">{{__('Policies and Strategies')}}</a></li>
                                                                 <li><a href="{{route('yen',[\App::getLocale()])}}">{{__('Acts')}}</a></li>
                                                                  <li><a href="{{route('niyamawali',[\App::getLocale()])}}">{{__('Regulations')}}</a></li>
                                                                  <li><a href="{{route('karyabidhi',[\App::getLocale()])}}"> {{__('Guidelines and Directives')}}</a></li>
       
          
          
                            </ul>
                        </li>-->
                      
                       <li class=""><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color: #fff;">{{__('Legal documents')}}<span class="caret"></span></a>
                        <ul role="menu" class=" dropdown">
                                                            <li><a href="{{route('procurement',[\App::getLocale()])}}">{{__('Procedure')}}</a></li>
      <li><a href="{{route('work',[\App::getLocale()])}}">{{__('Acts')}}</a></li>
      <li><a href="{{route('expenditure',[\App::getLocale()])}}">{{__('Policy / Manual')}}</a></li>
      <li><a href="{{route('annual',[\App::getLocale()])}}">{{__('Guidelines')}}</a></li>
      <!--<li><a href="{{route('contract',[\App::getLocale()])}}">{{__('Contract Status')}}</a></li>-->
     
                        </ul>
                    </li>
                       
                        <li class=""><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color: #fff;">{{__('News/ Notices')}}<span class="caret"></span></a>
                          <ul role="menu" class=" dropdown">
                                                              <li><a href="{{route('news',[\App::getLocale()])}}">{{__('News')}}</a></li>
        <li><a href="{{route('bolpatra',[\App::getLocale()])}}">{{__('Bolpatra')}}</a></li>
        <!--<li><a href="{{route('loi',[\App::getLocale()])}}">{{__('LOI')}}</a></li>
        <li><a href="{{route('loa',[\App::getLocale()])}}">{{__('LOA')}}</a></li>-->
        <li><a href="{{route('anya',[\App::getLocale()])}}">{{__('Other')}}</a></li>
       
                          </ul>
                      </li>
                      

                        <li class=""><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color: #fff;">{{__('Gallery')}}<span class="caret"></span></a>
                          <ul role="menu" class=" dropdown">
                                                              <li><a href="{{route('photo_gal',[\App::getLocale()])}}">{{__('Photo gallery')}}</a></li>
        <li><a href="{{route('video',[\App::getLocale()])}}">{{__('Video gallery')}}</a></li>
       
                          </ul>
                      </li>
  <li class=""><a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color: #fff;">{{__('Publication')}}<span class="caret"></span></a>
                            <ul role="menu" class=" dropdown">
                                                                <li><a href="{{route('yearly',[\App::getLocale()])}}">{{__('Yearly program')}}</a></li>
          <li><a href="{{route('partibedan',[\App::getLocale()])}}">{{__('Progress reports')}}</a></li>
          <li><a href="{{route('chaumasik',[\App::getLocale()])}}">{{__('Quaterly Report')}}</a></li>
          <li><a href="{{route('masik',[\App::getLocale()])}}">{{__('Monthly Report')}}</a></li>
          <li><a href="{{route('saptahik',[\App::getLocale()])}}">{{__('Weekly Report')}}</a></li>
          <li><a href="{{route('flow',[\App::getLocale()])}}">{{__('Reports')}}</a></li>
          <li><a href="{{route('bill',[\App::getLocale()])}}">{{__('Bill Publication')}}</a></li>
          <!--<li><a href="{{route('faq',[\App::getLocale()])}}">{{__('FAQ')}}</a></li>-->
          
                            </ul>
                        </li>

                        <li class=""><a href="{{route('download',[\App::getLocale()])}}" style="color: #fff;">{{__('Download')}}</a>
                                                    </li>
                                                    
                            <li class=""><a href="{{route('link',[\App::getLocale()])}}"  style="color: #fff;">{{__('Links')}}</a>
                           
                        </li>   
                         
                        <li class=""><a href="{{route('contact',[\App::getLocale()])}}" style="color: #fff;">{{__('Contact Us')}}</a></li>
                      
                       
                        </ul>
                        
                          
                                          
                    </div>
            </nav>
          </div>
        </div>
    </div>
    </header>

@yield('content')
</div>
</div>
<footer class="container-fluid">
<div class="row" style="color:#fff; background: #093D63; padding: 5px;">
    
    <div class="nested-container">
        <div class="col-sm-6 col-md-6 col-lg-4"> 
           <div><h6 style="color:#fff; font-weight: bold; font-size: 20px;">{{__('Contact Us')}}:</h6>
                <div class="textwidget">
                    <hr style="margin-bottom:8px; border-top:1px solid #fff">
                    <p style="font-weight: bold;">{{__('Address')}}:
                      <strong>{{$header->ministry}}</strong><br>
                      <strong>{{$header->address}}</strong>
                     </p>
                         <p style="font-weight: bold;"> {{__('Phone')}}: <strong>{{$header->phone}}</strong></p>
                         <p style="font-weight: bold;"> {{__('Email')}}: <strong>{{$header->email}}</strong></p>
                          <p style="font-weight: bold;"> {{__('Website')}}: <strong>{{$header->instagram}}</strong></p>
                          <span class="fa-stack fa-lg">
  <a href="#"><i class="fa fa-circle-thin fa-stack-2x" style="color: #fff;"></i>
  <i class="fa fa-facebook fa-stack-1x" style="color: #fff;"></i></a>
</span><span class="fa-stack fa-lg">
  <a href="#"><i class="fa fa-circle-thin fa-stack-2x" style="color: #fff;"></i>
  <i class="fa fa-twitter fa-stack-1x" style="color: #fff;"></i></a>
</span>
<span class="fa-stack fa-lg">
  <a href="#"><i class="fa fa-circle-thin fa-stack-2x" style="color: #fff;"></i>
  <i class="fa fa-youtube fa-stack-1x" style="color: #fff;"></i></a>
</span>
                    <img src="{{asset('images/logo.png')}}" alt="logo" class="img-responsive gov-logo pull-left hidden-xs" height="102" width="102">
                   
                   
                </div>
            </div>             
        </div>
                <div class="col-sm-6 col-md-6 col-lg-4"> 
         <h6 style="color:#fff; font-weight: bold; font-size: 20px;">{{__('Important Links')}}:</h6>
                <div class="textwidget">
                    <hr style="margin-bottom:8px; border-top:1px solid #fff">
                    @foreach($link as $link)
                    <p style="font-weight: bold;"><a href="{{$link->url}}" target="_blank"  style="color:#f5f8fa;"> {{$link->link_name}}</a></p>
                    @endforeach
                    <p><a href="{{route('link',[\App::getLocale()])}}" class="btn btn-xs btn-primary pull-right"><i class="fa fa-plus"></i>&nbsp;&nbsp;{{__('View More')}} </a></p>
                </div>
            </div>
                               <div class="col-sm-6 col-md-6 col-lg-4"> 
                            <div><h6 style="color:#fff; font-weight: bold; font-size: 20px;">{{__('Our Map')}}:</h6>
                <div class="textwidget links">
                    
                    <hr style="margin-bottom:8px; border-top:1px solid #fff">
                   <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=rukum&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:right;height:250px;width:100%;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:250px;width:100%;}</style></div></div>
                  
                </div>
            </div>
            
        </div>
            </div>
</div>
</footer>  
<div class="container-fluid">
<div class="row" style="color:#fff; background: #093D63; ">
    
    <div class="nested-container">
                          <div class="col-md-4" style="text-align: center; font-weight: bold;">
                             © 2020 Copyright : {{$header->ministry}}, {{$header->address}}
                             
                             
                          </div>
                           <div class="col-md-3" style="text-align: center; font-weight: bold;">
                            
                               Last Updated: 2020/09/17
                            
                           </div>
                           <div class="col-md-3" style="text-align: center; font-weight: bold;">
                            
                               Developed By: <a href="http://ninjainfosys.com" target="blank" style="color:#fcf8e3;">Ninja Infosys Pvt. Ltd.</a>
                            
                           </div>
                           <div class="col-md-2" style="text-align: center; font-weight: bold; margin-top: -20px;">
                            
                            <script type="text/javascript" src="https://freevisitorcounters.com/en/home/counter/791282/t/5"></script>
                         
                        </div>
                           </div>
 
</div>
</div>


<!--<div class="bottom__fixed show" style="background-color: #fff;">
  <div class="ui container">
    <div class="alt__row">
      <div class="alt__col">
        <a href="{{route('news',[\App::getLocale()])}}"><div class="icon">
          <img src="{{asset('images/news.png')}}" alt="footer">
        </div><strong class="title">{{__('News/ Notices')}}</strong></a></div><div class="alt__col"><a href="http://www.namis.gov.np/" target="_blank">
          <div class="icon">
            <img src="{{asset('images/logo.png')}}" alt="footer">
          </div><strong class="title">{{__('Agriculture Management Information System')}}</strong></a></div><div class="alt__col"><a href="{{route('photo_gal',[\App::getLocale()])}}">
            <div class="icon"><img src="{{asset('images/gallery.png')}}" alt="footer">
            </div><strong class="title">{{__('Photo gallery')}}</strong></a></div><div class="alt__col"><a href="{{route('bill',[\App::getLocale()])}}"><div class="icon"><img src="{{asset('images/bill.png')}}" alt="footer">
            </div><strong class="title">{{__('Bill Publication')}}</strong></a></div><div class="alt__col"><a href="{{route('contact',[\App::getLocale()])}}"><div class="icon"><img src="{{asset('images/contact.png')}}" alt="footer">
            </div><strong class="title">{{__('Contact Us')}}</strong></a></div></div></div></div>-->
            <button class="scrollToTopBtn">☝️</button>
            <script src="js/app.js"></script>
        <script type="text/javascript" src="../cdnjs.cloudflare.com/ajax/libs/bootstrap-lightbox/0.7.0/bootstrap-lightbox.min.js"></script>
        <script type="text/javascript">
            $('#myCarousel').carousel({
                interval: 2700
            });
        </script>
 <!--<script>
   window.oncontextmenu=function(){
     console.log("Right click Disabled");
     return false;
   }
 </script>-->
 <script
    src="{{asset('assets/js/nepali.datepicker.v3.1.min.js')}}"
    type="text/javascript"
></script>
 <script type="text/javascript">
    window.onload = function () {
        var mainInput = document.getElementById("nepali-datepicker");
        mainInput.nepaliDatePicker();
    };
</script>

@livewireScripts
</body>

</html>