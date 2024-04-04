@extends('header')
@section('content')
<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
<ul class="breadcrumb">
  <li><a href="/"><i class="fa fa-home"></i></a></li>
  <li><a href="#">{{__('FAQ')}} </a></li>
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

    <i class="fa fa-spinner fa-pulse" ></i> {{__('FAQ')}}<h6 class="content_title">  <span class="pull-right"></span>

</div>
                
                <table _ngcontent-oit-c76="" id="example" class="table table-bordered table-condensed table-responsive table-hover">
        
                  <thead _ngcontent-oit-c76="">
                    
                    <tr _ngcontent-oit-c76="" class="success">
                      <th _ngcontent-oit-c76="" width="7%">{{__('S.N')}} </th>
                      <th _ngcontent-oit-c76="" width="15%">{{__('Asked Question')}}</th>
                      <th _ngcontent-oit-c76="" width="50%">{{__('Answer')}} </th>
                      
                    </tr></thead>
                    <tbody _ngcontent-oit-c76="">
                      @foreach($faq as $faq)
                      <tr _ngcontent-oit-c76="" class="ng-star-inserted">
                        
                        <td _ngcontent-oit-c76=""> {{$loop -> iteration}}</td>
                        <td _ngcontent-oit-c76="">{{$faq->question}}</td>
                        <td _ngcontent-oit-c76="">{{$faq->answer}}</td>
                        
                            
                          @endforeach</tbody></table>
             </div>
           </div>
 
           
    </div>

              
            
        
        
       
        </body>
      </div>
</div>


@endsection