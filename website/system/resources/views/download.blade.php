@extends('header')
@section('content')


<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
<ul class="breadcrumb">
  <li><a href="/"><i class="fa fa-home"></i></a></li>
  <li><a href="#">{{__('Download')}} </a></li>
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

    <i class="fa fa-spinner fa-pulse" ></i> {{__('Download')}}<h6 class="content_title">  <span class="pull-right"></span>

</div>
      <div class="procedures" style="width: 100%;">
      	    <div class="download_list border top">
              <table _ngcontent-oit-c76="" id="example" class="table table-bordered table-condensed table-responsive table-hover">
        
                <thead _ngcontent-oit-c76="">
                  
                  <tr _ngcontent-oit-c76="" class="success">
                    <th _ngcontent-oit-c76="" width="7%">{{__('S.N')}} </th>
                    <th _ngcontent-oit-c76="" width="60%">{{__('Title')}} </th>
                    <th _ngcontent-oit-c76="" width="10%">{{__('Category')}} </th>
                    <th _ngcontent-oit-c76="" width="10%">{{__('Published Date')}} </th>
                    <th _ngcontent-oit-c76="" width="10%">{{__('View File')}} </th>
                    <th _ngcontent-oit-c76="" width="10%">{{__('Download')}} </th>
                  </tr></thead>
                  <tbody _ngcontent-oit-c76="">
                    @foreach($download as $download)
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
  </div>
</div>

     
      @endsection