@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>धेरै सोधिएको प्रस्नहरु</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">धेरै सोधिएको प्रस्नहरु</li>
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
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" Action="{{route('faq.store')}} " method="post" enctype="multipart/form-data">
              @include('alert.alert')
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="question">प्रश्न लेख्नुहोस्:*</label>
                    <input type="question" class="form-control" id="question" name="question"  placeholder="Enter Asked Question ">
                    @error('question')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="answer">सोधिएका प्रश्नको उत्तर लेख्नुहोस्:*</label>
                    <textarea class="text" name="answer" placeholder="Place some text here"
                              style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                              </textarea>
                              @error('answer')
                              <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                  
          <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
         

         


        </div>
        
      </div>
     
    </div>
  </section>
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">धेरै सोधिएका प्रश्नहरु लिस्ट</h3>
            </div>
            
            <div class="work-area" style="margin-top: 30px;">
 <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>क्र.म:</th>
                          <th>प्रश्नहरु:</th>
                          <th>उत्तरहरु</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                        
                   
                      @foreach ($faq as $faq)
                      <tr>       
                         <td>{{$loop->iteration}}</td>
                         <td>{{$faq->question}} </td>
                         <td>{{$faq->answer}} </td>
                       <td>
                        &nbsp;<a href="{{route('faq.edit',$faq->id)}}"><button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button></a>
                  <form class="float-left" action="{{route('faq.destroy',$faq)}}" method="Post">
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

@endsection
