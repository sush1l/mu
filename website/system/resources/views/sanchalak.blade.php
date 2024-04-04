@extends('header')
@section('content')


<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
<ul class="breadcrumb">
  <li><a href="/"><i class="fa fa-home"></i></a></li>
  <li><a href="#">{{__('Board of directors')}}</a></li>
</ul>
   </div>
     </div>
</div>
    </div>
<h3 style="text-align: center; font-weight:bold;">परियोजना (धान सुपरजोन) संचालक समितिका पदाधिकारीहरुको विवरण</h3>
<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
    <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">

    <i class="fa fa-spinner fa-pulse" ></i> {{__('Board of directors')}}<h6 class="content_title">  <span class="pull-right"></span>

</div>
          <div class="notice_list border top">
            <table _ngcontent-oit-c76="" id="example" class="table table-bordered table-condensed table-responsive table-hover">
        
              <thead _ngcontent-oit-c76="">
                
                <tr _ngcontent-oit-c76="" class="success">
                  <th _ngcontent-oit-c76="" width="10%">{{__('S.N')}}</th>
                  <th _ngcontent-oit-c76="" width="30%">{{__('Name')}}</th>
                  <th _ngcontent-oit-c76="" width="30%">{{__('Designation')}}</th>
                  <th _ngcontent-oit-c76="" width="30%">{{__('Address')}}</th>
                  <th _ngcontent-oit-c76="" width="20%">{{__('Phone')}}</th>
                 
                </tr></thead>
                <tbody _ngcontent-oit-c76="">
                  @foreach($samiti as $samiti)
                 
                  <tr _ngcontent-oit-c76="" class="ng-star-inserted">
                    
                    <td _ngcontent-oit-c76=""> {{$loop -> iteration}}</td>
                    <td _ngcontent-oit-c76="">{{$samiti->name}} </td>
                    <td _ngcontent-oit-c76="">{{$samiti->designation}}</td>
                    <td _ngcontent-oit-c76=""><small _ngcontent-oit-c76=""><i _ngcontent-oit-c76="">{{$samiti->address}} </i></small></td>
                    <td _ngcontent-oit-c76="">{{$samiti->phone}}</td>  
                    
      
                        
                   
                      @endforeach</tbody></table>
                      <h3 style="text-align: center; font-weight:bold; font-size:14px;">{{__('Zone Steering Committee Formation Date: 11/15/2073')}}</h3>
                      <h3 style="text-align: center; font-weight:bold; font-size:14px;">{{__('D.K.V.K. Registration date: 2074/03/22')}}</h3>
    </div>
</div>
</div>
     
@endsection