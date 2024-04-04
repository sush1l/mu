@extends('header')
@section('content')

<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
<ul class="breadcrumb">
  <li><a href="/"><i class="fa fa-home"></i></a></li>
  <li><a href="#">{{__('Bill Publication')}} </a></li>
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

    <i class="fa fa-spinner fa-pulse" ></i> {{__('Bill Publication')}}<h6 class="content_title">  <span class="pull-right"></span>

</div>
<div class="procedures" style="width: 100%">
  <div class="notice_list border top">       
<table _ngcontent-oit-c76="" id="example" class="table table-bordered table-condensed table-responsive table-hover">
        
                  <thead _ngcontent-oit-c76="">
                    
                    <tr _ngcontent-oit-c76="" class="success">
                      <th _ngcontent-oit-c76="" width="7%">क्र.सं</th>
                      <th _ngcontent-oit-c76="" width="50%">विवरण:</th>
                      <th _ngcontent-oit-c76="" width="15%">बजेट नं.:</th>
                      <th _ngcontent-oit-c76="" width="15%">पखर्च शिर्षक.:</th>
                      <th _ngcontent-oit-c76="" width="15%">पखरिद प्रकृया.:</th>
                      <th _ngcontent-oit-c76="" width="15%">पान न.:</th>
                      <th _ngcontent-oit-c76="" width="15%">पबिल फईल:</th>
                      <th _ngcontent-oit-c76="" width="15%">रसिद मिति:</th>
                      <th _ngcontent-oit-c76="" width="15%">रकम:</th>
                      <th _ngcontent-oit-c76="" width="15%">कैफियत:</th>
                      <th _ngcontent-oit-c76="" width="15%">अपलोड मिति:</th>
                      
                    </tr></thead>
                    <tbody _ngcontent-oit-c76="">
                      @foreach($bill as $bill)
                      <tr _ngcontent-oit-c76="" class="ng-star-inserted">
                        
                        <td _ngcontent-oit-c76=""> {{$loop -> iteration}}</td>
                        <td _ngcontent-oit-c76="">{{$bill->description}}</td>
                        <td _ngcontent-oit-c76="">{{$bill->budget_no}} </td>
                        <td _ngcontent-oit-c76="">{{$bill->expense_head}}}</td>
                        <td _ngcontent-oit-c76="">{{$bill->buying_process}}</td>
                        <td _ngcontent-oit-c76="">{{$bill->pan_no}} </td>
                          <td _ngcontent-oit-c76=""><a _ngcontent-oit-c76="" class="btn btn-sm btn-primary" href="{{asset('storage/assets/bill/'.$bill->bill)}}" target="blank"><i _ngcontent-oit-c76="" class="fa fa-eye"></i> View</a></td>
                          <td _ngcontent-oit-c76="">{{$bill->bill_date}}</td>
                          <td _ngcontent-oit-c76="">{{$bill->cash}} </td>
                          <td _ngcontent-oit-c76="">{{$bill->remarks}}</td>
                          <td _ngcontent-oit-c76="">{{$bill->post_date}}</td>
                          @endforeach</tbody></table>
             </div>
           </div>
 
           
    </div>

              
            
        
  </div>
  </div>
  
       
        </body>
      </div>
</div>


@endsection