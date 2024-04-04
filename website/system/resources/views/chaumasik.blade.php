@extends('header')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
<ul class="breadcrumb">
  <li><a href="/"><i class="fa fa-home"></i></a></li>
  <li><a href="#">{{__('Quaterly Report')}}</a></li>
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

    <i class="fa fa-spinner fa-pulse" ></i> {{__('Quaterly Report')}}<h6 class="content_title">  <span class="pull-right"></span>

</div>
<div class="activities" style="width: 100%;">
      	    
              
    <table _ngcontent-oit-c76="" id="example" class="table table-bordered table-condensed table-responsive table-hover">
      
      <thead _ngcontent-oit-c76="">
        
        <tr _ngcontent-oit-c76="" class="success">
          <th _ngcontent-oit-c76="" width="7%">{{__('S.N')}} </th>
          <th _ngcontent-oit-c76="" width="60%">{{__('Title')}}</th>
          <th _ngcontent-oit-c76="" width="15%">{{__('Category')}} </th>
          <th _ngcontent-oit-c76="" width="15%">{{__('Published Date')}} </th>
          <th _ngcontent-oit-c76="" width="13%"></th>
        </tr></thead>
        <tbody _ngcontent-oit-c76="">
          @foreach($publication as $publication)
          @if ($publication->publication_category_id == 9)
         
				<tr _ngcontent-oit-c76="" class="ng-star-inserted">
				  
				  <td _ngcontent-oit-c76=""> {{$loop -> iteration}}</td>
				  <td _ngcontent-oit-c76="">{{$publication->publication_name}}</td>
				  <td _ngcontent-oit-c76="">{{$publication->publication_category->publication_category_name}}</td>
				  <td _ngcontent-oit-c76=""><small _ngcontent-oit-c76=""><i _ngcontent-oit-c76="">{{$publication->publication_date}}</i></small></td>
					<td _ngcontent-oit-c76=""><a _ngcontent-oit-c76="" class="btn btn-sm btn-primary" href="{{asset('storage/assets/publication/'.$publication->publication_file)}}" target="blank"><i _ngcontent-oit-c76="" class="fa fa-eye"></i> View</a></td></tr>
	
					  
              @endif 
                @endforeach 
                
              </tbody></table>
                
  </div>
   </div>
   
     </div>
</div>
 

    </div>


@endsection

