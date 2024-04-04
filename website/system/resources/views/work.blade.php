@extends('header')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
<ul class="breadcrumb">
  <li><a href="/"><i class="fa fa-home"></i></a></li>
  <li><a href="#">{{__('Acts')}}</a></li>
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

   {{__('Acts')}}<h6 class="content_title">  <span class="pull-right"></span>

</div>
<div class="activities" style="width: 100%;">
      	    
              
    <table _ngcontent-oit-c76="" id="example" class="table table-bordered table-condensed table-responsive table-hover">
      
      <thead _ngcontent-oit-c76="">
        
        <tr _ngcontent-oit-c76="" class="success">
          <th _ngcontent-oit-c76="" width="7%">{{__('S.N')}}</th>
          <th _ngcontent-oit-c76="" width="50%">{{__('Title')}}</th>
          <th _ngcontent-oit-c76="" width="15%">{{__('Category')}}</th>
          <th _ngcontent-oit-c76="" width="15%">{{__('Published Date')}}</th>
          <th _ngcontent-oit-c76="" width="13%"></th>
        </tr></thead>
        <tbody _ngcontent-oit-c76="">
          @foreach($dastabej as $dastabejss)
          @if ($dastabejss->dastabej_category_id == 1)
          <tr _ngcontent-oit-c76="" class="ng-star-inserted">
            
            <td _ngcontent-oit-c76=""> {{$loop -> iteration}}</td>
            <td _ngcontent-oit-c76="">{{$dastabejss -> dastabej_title}}</td>
            <td _ngcontent-oit-c76="">{{$dastabejss->dastabej_category->dastabej_category_name}}</td>
            <td _ngcontent-oit-c76=""><small _ngcontent-oit-c76=""><i _ngcontent-oit-c76="">{{$dastabejss ->dastabej_date}}</i></small></td>
              <td _ngcontent-oit-c76=""><a _ngcontent-oit-c76="" class="btn btn-sm btn-primary" href="{{asset('storage/assets/dastabej/'.$dastabejss->file)}}" target="blank"><i _ngcontent-oit-c76="" class="fa fa-eye"></i> View</a></td></tr>

              @endif 
              @endforeach 
              </tbody></table>
                
  </div>
   </div>
   
     </div>
</div>
 

    </div>


@endsection

