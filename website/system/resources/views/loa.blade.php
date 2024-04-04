@extends('header')
@section('content')


<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
<ul class="breadcrumb">
  <li><a href="/"><i class="fa fa-home"></i></a></li>
  <li><a href="#">{{__('LOA')}}</a></li>
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

    <i class="fa fa-spinner fa-pulse" ></i> {{__('LOA')}}<h6 class="content_title">  <span class="pull-right"></span>

</div>
          <div class="notice_list border top">
            <table _ngcontent-oit-c76="" id="example" class="table table-bordered table-condensed table-responsive table-hover">
        
              <thead _ngcontent-oit-c76="">
                
                <tr _ngcontent-oit-c76="" class="success">
                  <th _ngcontent-oit-c76="" width="7%">{{__('S.N')}}</th>
                  <th _ngcontent-oit-c76="" width="50%">{{__('Title')}}</th>
                  <th _ngcontent-oit-c76="" width="15%">{{__('Category')}}</th>
                  <th _ngcontent-oit-c76="" width="15%">{{__('Published Date')}}</th>
                  <th _ngcontent-oit-c76="" width="15%">{{__('Publisher')}}</th>
                  <th _ngcontent-oit-c76="" width="13%"></th>
                </tr></thead>
                <tbody _ngcontent-oit-c76="">
                  @foreach($notice as $notice)
                  @if ($notice->notice_category_id == 5)
                  <tr _ngcontent-oit-c76="" class="ng-star-inserted">
                    
                    <td _ngcontent-oit-c76=""> {{$loop -> iteration}}</td>
                    <td _ngcontent-oit-c76="">{{$notice->notice_name}} </td>
                    <td _ngcontent-oit-c76="">{{$notice->notice_category->notice_category_name}}</td>
                    <td _ngcontent-oit-c76=""><small _ngcontent-oit-c76=""><i _ngcontent-oit-c76="">{{$notice->notice_date}} </i></small></td>
                    <td _ngcontent-oit-c76="">{{$notice->notice_publisher}}</td>  
                    <td _ngcontent-oit-c76=""><a _ngcontent-oit-c76="" class="btn btn-sm btn-primary" href="{{asset('storage/assets/notice/'.$notice->notice_file)}}" target="blank"><i _ngcontent-oit-c76="" class="fa fa-eye"></i> View</a></td></tr>
      
                        
                        @endif
                      @endforeach</tbody></table>
      
    </div>
</div>
</div>
     
@endsection