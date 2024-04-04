@extends('header')
@section('content')
<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
<ul class="breadcrumb">
  <li><a href="/"><i class="fa fa-home"></i></a></li>
  <li><a href="#">{{__('Employee Detail')}}</a></li>
</ul>
   </div>
     </div>
</div>
    </div>
<style> 
td, th {
    padding: 3px;
}
</style>
    
<div class="container top">
<div class="row">
  <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">
    
    <i class="fa fa-spinner fa-pulse" ></i> {{__('Employee Detail')}}<h6 class="content_title">  <span class="pull-right"></span>

</div>
      <div class="col-md-12 top">
      	<body>

<div class="vvi_person">
<div class="vvi-In clearfix">
	<div class="col-md-12" style="padding-bottom: 10px;">
		<div class="row">
      @foreach($employee as $employee)            
		<div class="col-md-6" style="  padding:5px;">
      <div style="border: 1px solid #cacaca;">
        <table>
  <tbody>
    <tr>
      <td rowspan="6"><figure><img alt="" src="{{asset('storage/assets/employee/'.$employee->photo)}}" style="height:115px; width:115px; padding-right: 5px;" /></figure></td>
      <td>{{__('Name')}} :</td>
      <td> {{$employee -> name}}</td>
    </tr>
    <tr>

      <td>{{__('Designation')}}  :</td>
      <td>{{$employee -> designations->designation_name}}</td>
    </tr>
    <tr>
      <td>{{__('Phone')}} :</td>
      <td> {{$employee -> phone}}</td>
    </tr>
    <tr>
      <td>{{__('Email')}} :</td>
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
            
        
        
       
    </body>
      </div>
</div>
</div>

@endsection