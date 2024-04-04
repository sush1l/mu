@extends('header')
@section('content')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.0/css/lightbox.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.0/js/lightbox.min.js"></script>

<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
<ul class="breadcrumb">
  <li><a href="/"><i class="fa fa-home"></i></a></li>
  <li><a href="#">Search</a></li>
  <li><a href="#">{{$q}}</a></li>
</ul>
   </div>
     </div>
</div>
    </div>

<div class="container-fluid">
  <div class="col-md-12">
     <div class="row">
         <div class="">Matching results for {{$q}} are:</div>
     </div>
     @if(!$notices->isEmpty())
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
    <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">

    <i class="fa fa-spinner fa-pulse" ></i> सूचना/ समाचार<h6 class="content_title">  <span class="pull-right"></span>

</div>
          <div class="notice_list border top">
            <table _ngcontent-oit-c76="" id="example" class="table table-bordered table-condensed table-responsive table-hover">
        
              <thead _ngcontent-oit-c76="">
                
                <tr _ngcontent-oit-c76="" class="success">
                  <th _ngcontent-oit-c76="" width="7%">क्र.सं</th>
                  <th _ngcontent-oit-c76="" width="50%">शीर्षक</th>
                  <th _ngcontent-oit-c76="" width="15%">समुह</th>
                  <th _ngcontent-oit-c76="" width="15%">प्रकाशित मिति</th>
                  <th _ngcontent-oit-c76="" width="15%">प्रकाशक:</th>
                  <th _ngcontent-oit-c76="" width="13%"></th>
                </tr></thead>
                <tbody _ngcontent-oit-c76="">
                  @foreach($notices as $notice)
                  <tr _ngcontent-oit-c76="" class="ng-star-inserted">
                    
                    <td _ngcontent-oit-c76=""> {{$loop -> iteration}}</td>
                    <td _ngcontent-oit-c76="">{{$notice->notice_name}} </td>
                    <td _ngcontent-oit-c76="">{{$notice->notice_category->notice_category_name}}</td>
                    <td _ngcontent-oit-c76=""><small _ngcontent-oit-c76=""><i _ngcontent-oit-c76="">{{$notice->notice_date}} </i></small></td>
                    <td _ngcontent-oit-c76="">{{$notice->notice_publisher}}</td>  
                    <td _ngcontent-oit-c76=""><a _ngcontent-oit-c76="" class="btn btn-sm btn-primary" href="{{asset('storage/assets/notice/'.$notice->notice_file)}}" target="blank"><i _ngcontent-oit-c76="" class="fa fa-eye"></i> View</a></td></tr>
      
                        
                        
                      @endforeach</tbody></table>
      
    </div>
</div>
</div>
@endif
@if(!$downloads->isEmpty())

 <div class="row" style="padding: 5px;">
   <div class="col-md-12">
    <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">

    <i class="fa fa-spinner fa-pulse" ></i> डाउनलोड<h6 class="content_title">  <span class="pull-right"></span>

</div>
      <div class="procedures" style="width: 100%;">
      	    <div class="download_list border top">
              <table _ngcontent-oit-c76="" id="example" class="table table-bordered table-condensed table-responsive table-hover">
        
                <thead _ngcontent-oit-c76="">
                  
                  <tr _ngcontent-oit-c76="" class="success">
                    <th _ngcontent-oit-c76="" width="7%">क्र.सं</th>
                    <th _ngcontent-oit-c76="" width="60%">शीर्षक</th>
                    <th _ngcontent-oit-c76="" width="10%">समुह</th>
                    <th _ngcontent-oit-c76="" width="10%">प्रकाशित मिति</th>
                    <th _ngcontent-oit-c76="" width="10%">फाइल हेर्नुहोस्</th>
                    <th _ngcontent-oit-c76="" width="10%">डाउनलोड</th>
                  </tr></thead>
                  <tbody _ngcontent-oit-c76="">
                    @foreach($downloads as $download)
                    <tr _ngcontent-oit-c76="" class="ng-star-inserted">
                      
                      <td _ngcontent-oit-c76=""> {{$loop -> iteration}}</td>
                      <td _ngcontent-oit-c76="">{{$download -> download_title}}</td>
                      <td _ngcontent-oit-c76="">{{$download ->download_category->download_category_name}}</td>
                      <td _ngcontent-oit-c76=""><small _ngcontent-oit-c76=""><i _ngcontent-oit-c76="">{{$download -> download_date}}</i></small></td>
                        <td _ngcontent-oit-c76=""><a _ngcontent-oit-c76="" class="btn btn-sm btn-primary" href="{{asset('storage/assets/download/'.$download->file)}}" target="blank"><i _ngcontent-oit-c76="" class="fa fa-eye"></i> View</a></td>
                        <td _ngcontent-oit-c76=""><a _ngcontent-oit-c76="" class="btn btn-sm btn-primary" download="{{asset('storage/assets/download/'.$download->file)}}" href="{{asset('storage/assets/download/'.$download->file)}}"><i class="fa fa-download"> Download</i></a></td></tr>
        
                          
                          
                        @endforeach</tbody></table>
     
    </div>
      </div>
  </div>
</div>
@endif
@if(!$publications->isEmpty())
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
    <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">

    <i class="fa fa-spinner fa-pulse" ></i> प्रतिबेदन<h6 class="content_title">  <span class="pull-right"></span>

</div>
<div class="activities" style="width: 100%;">
      	    
              
    <table _ngcontent-oit-c76="" id="example" class="table table-bordered table-condensed table-responsive table-hover">
      
      <thead _ngcontent-oit-c76="">
        
        <tr _ngcontent-oit-c76="" class="success">
          <th _ngcontent-oit-c76="" width="7%">क्र.सं</th>
          <th _ngcontent-oit-c76="" width="60%">शीर्षक</th>
          <th _ngcontent-oit-c76="" width="15%">समुह</th>
          <th _ngcontent-oit-c76="" width="15%">प्रकाशित मिति</th>
          <th _ngcontent-oit-c76="" width="13%"></th>
        </tr></thead>
        <tbody _ngcontent-oit-c76="">
          @foreach($publications as $publications)
         
				<tr _ngcontent-oit-c76="" class="ng-star-inserted">
				  
				  <td _ngcontent-oit-c76=""> {{$loop -> iteration}}</td>
				  <td _ngcontent-oit-c76="">{{$publications->publication_name}}</td>
				  <td _ngcontent-oit-c76="">{{$publications->publication_category->publication_category_name}}</td>
				  <td _ngcontent-oit-c76=""><small _ngcontent-oit-c76=""><i _ngcontent-oit-c76="">{{$publications->publication_date}}</i></small></td>
					<td _ngcontent-oit-c76=""><a _ngcontent-oit-c76="" class="btn btn-sm btn-primary" href="{{asset('storage/assets/publication/'.$publications->publication_file)}}" target="blank"><i _ngcontent-oit-c76="" class="fa fa-eye"></i> View</a></td></tr>
	
					 
                @endforeach 
                
              </tbody></table>
                
  </div>
   </div>
   
     </div>
@endif
@if(!$dastabejs->isEmpty())
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
    <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">

    <i class="fa fa-spinner fa-pulse" ></i> कार्यविधि/ निर्देशिका<h6 class="content_title">  <span class="pull-right"></span>

</div>
      <div class="activities" style="width: 100%;">
      	    
              
      <table _ngcontent-oit-c76="" id="example" class="table table-bordered table-condensed table-responsive table-hover">
        
        <thead _ngcontent-oit-c76="">
          
          <tr _ngcontent-oit-c76="" class="success">
            <th _ngcontent-oit-c76="" width="7%">क्र.सं</th>
            <th _ngcontent-oit-c76="" width="60%">शीर्षक</th>
            <th _ngcontent-oit-c76="" width="15%">समुह</th>
            <th _ngcontent-oit-c76="" width="15%">प्रकाशित मिति</th>
            <th _ngcontent-oit-c76="" width="13%"></th>
          </tr></thead>
          <tbody _ngcontent-oit-c76="">
            @foreach($dastabejs as $dastabej)
            <tr _ngcontent-oit-c76="" class="ng-star-inserted">
              
              <td _ngcontent-oit-c76=""> {{$loop ->iteration}}</td>
              <td _ngcontent-oit-c76="">{{$dastabej -> dastabej_title}}</td>
              <td _ngcontent-oit-c76="">{{$dastabej->dastabej_category->dastabej_category_name}}</td>
              <td _ngcontent-oit-c76=""><small _ngcontent-oit-c76=""><i _ngcontent-oit-c76="">{{$dastabej -> dastabej_date}}</i></small></td>
                <td _ngcontent-oit-c76=""><a _ngcontent-oit-c76="" class="btn btn-sm btn-primary" href="{{asset('storage/assets/dastabej/'.$dastabej->file)}}" target="blank"><i _ngcontent-oit-c76="" class="fa fa-eye"></i> View</a></td></tr>

                @endforeach 
                  
               </tbody></table>
                  
    </div>
     
  </div>
</div>
@endif
@if(!$employees->isEmpty())
<div class="row">
  <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">
    
    <i class="fa fa-spinner fa-pulse" ></i> कर्मचारी विवरण<h6 class="content_title">  <span class="pull-right"></span>

</div>
      <div class="col-md-12 top">
      	<body>

<div class="vvi_person">
<div class="vvi-In clearfix">
	<div class="col-md-12" style="padding-bottom: 10px;">
		<div class="row">
      @foreach($employees as $employee)            
		<div class="col-md-6" style="  padding:5px;">
      <div style="border: 1px solid #cacaca;">
        <table>
  <tbody>
    <tr>
      <td rowspan="6"><figure><img alt="" src="{{asset('storage/assets/employee/'.$employee->photo)}}" style="height:115px; width:115px; padding-right: 5px;" /></figure></td>
      <td>नाम :</td>
      <td> {{$employee -> name}}</td>
    </tr>
    <tr>

      <td>पद  :</td>
      <td>{{$employee -> designation_name}}</td>
    </tr>
    <tr>
      <td>फोन :</td>
      <td> {{$employee -> phone}}</td>
    </tr>
    <tr>
      <td>ई-मेल :</td>
      <td>{{$employee -> email}}</td>
    </tr>
    
  </tbody>
</table>
 </div>
  </div>
  @endforeach
              
		
              
		
  </div>
</div>
</div>
</div>

               </div>
            </div>
@endif
 @if(!$links->isEmpty())
   <div class="row" style="padding: 5px;">
   <div class="col-md-12">
    <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">

    <i class="fa fa-spinner fa-pulse" ></i> लिंकहरु<h6 class="content_title">  <span class="pull-right"></span>

</div>
      <div class="procedures" style="width: 100%">
        <div class="download_list border top">
            <table _ngcontent-oit-c76="" id="example" class="table table-bordered table-condensed table-responsive table-hover">
    
                <thead _ngcontent-oit-c76="">
                  
                  <tr _ngcontent-oit-c76="" class="success">
                    <th _ngcontent-oit-c76="" width="5%">क्र.सं</th>
                    <th _ngcontent-oit-c76="" width="45%">कार्यालयको नाम</th>
                    <th _ngcontent-oit-c76="" width="50%">कार्यालयको लिंक</th>
                    <th _ngcontent-oit-c76="" width=""></th>
                  </tr></thead>
                  <tbody _ngcontent-oit-c76="">
                    @foreach ($links as $linkss)
                    <tr _ngcontent-oit-c76="" class="ng-star-inserted">
                      
                      <td _ngcontent-oit-c76="">{{$loop->iteration}}</td>
                      <td _ngcontent-oit-c76="">{{$linkss->link_name}}</td>
                      <td _ngcontent-oit-c76=""><a href="{{$linkss->url}}" target="_blank">{{$linkss->url}}</a></td>
                      @endforeach  
                        </tbody></table>
</div>
  </div>
  </div>
</div>
 @endif
 @if(!$photos->isEmpty())
   <div class="row" style="padding: 5px;">
   <div class="col-md-12">
    <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">

    <i class="fa fa-spinner fa-pulse" ></i> ग्यालरी<h6 class="content_title">  <span class="pull-right"></span>

</div>
<br>
@foreach($photos as $photo_album)
    <div class="thumbnails group">
      
      <a href="{{asset('storage/assets/photo/'.$photo_album->cover_photo)}} " data-lightbox="gallery" data-title="{{$photo_album -> album_name}}"><img src="{{asset('storage/assets/photo/'.$photo_album->cover_photo)}}" alt="" style="width: 350px; height:180px;"></a>
     
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
 @endif
@endsection