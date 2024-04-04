@extends('header')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
<ul class="breadcrumb">
  <li><a href="/"><i class="fa fa-home"></i></a></li>
  <li><a href="#">{{__('Work Detail')}}</a></li>
</ul>
   </div>
     </div>
</div>
    </div>

<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
    @foreach($office_Detail as $office_Detail)
    <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">

   {{__('Work Detail')}}<h6 class="content_title">  <span class="pull-right"></span>

</div>
<p>{!!$office_Detail->work_area!!}

</p>
   </div>
   
     </div>
</div>
 
@endforeach
    </div>


@endsection

