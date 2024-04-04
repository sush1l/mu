@extends('header')
@section('content')


<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
<ul class="breadcrumb">
  <li><a href="/"><i class="fa fa-home"></i></a></li>
  <li><a href="#">{{__('Links')}} </a></li>
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

    <i class="fa fa-spinner fa-pulse" ></i> {{__('Links')}}<h6 class="content_title">  <span class="pull-right"></span>

</div>
      <div class="procedures" style="width: 100%">
        <div class="download_list border top">
            <table _ngcontent-oit-c76="" id="example" class="table table-bordered table-condensed table-responsive table-hover">
    
                <thead _ngcontent-oit-c76="">
                  
                  <tr _ngcontent-oit-c76="" class="success">
                    <th _ngcontent-oit-c76="" width="5%">{{__('S.N')}} </th>
                    <th _ngcontent-oit-c76="" width="45%">{{__('Office Name')}} </th>
                    <th _ngcontent-oit-c76="" width="50%">{{__('Office Links')}} </th>
                    <th _ngcontent-oit-c76="" width=""></th>
                  </tr></thead>
                  <tbody _ngcontent-oit-c76="">
                    @foreach ($link as $links)
                    <tr _ngcontent-oit-c76="" class="ng-star-inserted">
                      
                      <td _ngcontent-oit-c76="">{{$loop->iteration}}</td>
                      <td _ngcontent-oit-c76="">{{$links->link_name}}</td>
                      <td _ngcontent-oit-c76=""><a href="{{$links->url}}" target="_blank">{{$links->url}}</a></td>
                      @endforeach  
                        </tbody></table>
</div>
  </div>
  </div>
</div>
  </div>
</div>

      @endsection