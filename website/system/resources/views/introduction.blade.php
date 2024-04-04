@extends('header')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
<ul class="breadcrumb">
  <li><a href="/"><i class="fa fa-home"></i></a></li>
  <li><a href="#">{{__('Introduction')}} </a></li>
</ul>
   </div>
     </div>
</div>
    </div>

<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-8">
@foreach ($office_Detail as $office_Detail)
    

    <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">

   {{__('Introduction')}}<h6 class="content_title">  <span class="pull-right"></span>

</div>
<p>   {!!$office_Detail->introduction!!}

</p>

   </div>
   <div class="col-md-4">
    <img src="{{asset('storage/assets/header/'.$header->bg_photo)}}" alt="" style="width:100%; height: 300px;">
   </div>
     </div>
</div>
 <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-6">
  <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">

    {{__('Plan')}}<h6 class="content_title">  <span class="pull-right"></span>

</div>
<p>  {!!$office_Detail->aim!!}
</p>
   </div>

   <div class="col-md-6">
 <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">

 {{__('Aim')}}<h6 class="content_title">  <span class="pull-right"></span>

</div>
<p> {!!$office_Detail->plan!!}
</p>
   </div>

 

     </div>
</div>
@endforeach
    </div>


@endsection

