@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>बिल सार्बजनिकरण लिस्ट:</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">बिल सार्बजनिकरण लिस्ट:</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">बिल सार्बजनिकरण लिस्ट:</h3>
            </div>
            
            <div class="work-area" style="margin-top: 30px;">
 <table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>क्र.सं.:</th>
            <th>विवरण:</th>
            <th>बजेट नं.:</th>
            <th>खर्च शिर्षक.:</th>
            <th>पखरिद प्रकृया:</th>   
            <th>पान न.:</th>
            <th>बिल फईल:</th>
            <th>रसिद मिति:</th>
            <th>रकम:</th>
            <th>कैफियत:</th>
            <th>अपलोड मिति:</th>
            <th>Action</th>
           
        </tr>
    </thead>
                        
                        <tbody>
                        
                          @foreach ($bill as $bill)
                          <tr>       
                             <td>{{$loop->iteration}}</td>
                             <td>{{$bill->description}} </td>
                             <td>{{$bill->budget_no}} </td>
                             <td>{{$bill->expense_head}} </td>
                             <td>{{$bill->buying_process}} </td>
                             <td>{{$bill->pan_no}} </td>
                             <td>
                              <a href="{{asset('storage/assets/bill/'.$bill->bill)}}">{{$bill -> bill}}</a></td>
                              
                              <td>{{$bill->bill_date}} </td>
                             <td>{{$bill->cash}} </td>
                             <td>{{$bill->remarks}} </td>
                             <td>{{$bill->post_date}} </td>
                             
                          
                           
                            
                            <td>
                              &nbsp;<a href="{{route('bill.edit',$bill->id)}}"><button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button></a>
                             <form class="float-left" action="{{route('bill.destroy',$bill)}}" method="Post">
                        @csrf
                    {{method_field('DELETE')}}
                           <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete this item?');"><i class="fa fa-trash"></i></button>
                           
                      </form>
                    </td> 
                        </tr>
                       @endforeach 
                          </tbody>
                    </table>
                
                </div>
          </div>
         </div>
        </div>
     </div>
  </section>
    <!-- /.content -->
  </div>

@endsection
