@extends('header')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.0/css/lightbox.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.0/js/lightbox.min.js"></script>
<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
<ul class="breadcrumb">
  <li><a href="/"><i class="fa fa-home"></i></a></li>
  <li><a href="#">{{__('Video gallery')}} </a></li>
</ul>
   </div>
     </div>
</div>
    </div>

<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
    <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">

      {{__('Video gallery')}}<h6 class="content_title">  <span class="pull-right"></span>

</div>
<br>
<div class="row"></div>
@foreach($videos as $video)
    <div class="thumbnails group  col-md-4">
      
      <iframe width="100%" height="250" value="{!!$video->video!!}
      <div style="color:red;">{{$video->video_title}}</div>
     
    </div>
    @endforeach
  </div>
</div>
<style>*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

html {
  background-image: linear-gradient( 288.7deg,  rgba(228,47,47,1) 2.6%, rgba(233,233,177,1) 91.3% );
  min-height: 100vh;
  font-family: 'Roboto', Arial, sans-serif;
}

img {
	max-width: 100%;
	height: auto;
}

a {
	text-decoration: none;
}

.container {
    max-width: 960px;
    margin: 0 auto;
    overflow: hidden;
}

/* Thumbnails Style */
.thumbnails {
	margin-right: -15px;
}

.thumbnails a {
	float: left;
	width: 25%;
	box-sizing: border-box;
	padding-right: 15px;
	margin-bottom: 15px;
}

.thumbnails img {
	width: 100%;
	height: auto;
	display: block;
	transition: all .2s ease-in-out;
}

.thumbnails:hover img {
	opacity: .6;
	transform: scale(.92);
}

.thumbnails:hover img:hover {
	opacity: 1;
	transform: scale(1) rotate(2deg);
	box-shadow: 0 0 7px rgba(0, 0, 0, .5);
}

@media screen and (max-width: 767px) {
	
	.thumbnails a {
		width: 50%;
	}
	
}
</style>

  </div>
</div>
        
      @endsection