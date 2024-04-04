@extends('header')
@section('content')


<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
<ul class="breadcrumb">
  <li><a href="/"><i class="fa fa-home"></i></a></li>
  <li><a href="#">{{__('Nepal Weather')}}</a></li>
</ul>
   </div>
     </div>
</div>
    </div>

<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
  
<iframe src="https://www.ashesh.com.np/weather/widget.php?title=Nepal Weather Observation&header_color=00a2e2&api=101119l345" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:100%; height:700px; border-radius:5px;" allowtransparency="true">
</iframe><span style="font-size:10px;color:gray;display:block">© <a href="http://www.ashesh.com.np/weather/" title="Weather observation" target="_top" style="text-decoration:none;font-size:10px;color:gray">Weather observation</a></span>
</div>
</div>
     
@endsection