@extends('header')
@section('content')
<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
<ul class="breadcrumb">
  <li><a href="/"><i class="fa fa-home"></i></a></li>
  <li><a href="#">{{__('Organization Structure')}} </a></li>
</ul>
   </div>
     </div>
</div>
    </div>

    <div class="container-fluid">
      <div class="col-md-12">
      <div class="row" style="padding: 5px;">
       <div class="col-md-12">
        @foreach($office_detail as $office_Detail)
        <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">
    
        <i class="fa fa-spinner fa-pulse" ></i> {{__('Organization Structure')}}<h6 class="content_title">  <span class="pull-right"></span>
    
    </div>
    <img src="{{asset('storage/assets/office/'.$office_Detail->organization_structure)}}" alt="" style="width:100%; height: auto;">
       </div>
       
         </div>
    </div>
    @endforeach
    
        </div>

@endsection