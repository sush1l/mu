@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>निदेशानालय थप्नुहोस</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">निदेशानालय थप्नुहोस</li>
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
            <form role="form" Action="{{route('directorate.store')}} " method="post" enctype="multipart/form-data">
              @include('alert.alert')
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="directorate_name">निदेशानालयको नाम:*</label>
                    <input type="directorate_name" class="form-control" id="directorate_name" name="directorate_name"  placeholder="Enter Directrote Name ">
                    @error('directorate_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="directorate_email">इमेल:*</label>
                    <input type="email" class="form-control" id="directorate_email" name="directorate_email"  placeholder="Enter Email ">
                              @error('directorate_email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                            <div class="form-group">
                                <label for="directorate_phone">Phone Number:*</label>
                                <input type="text" class="form-control" id="directorate_phone" name="directorate_phone"  placeholder="Enter Phone Number ">
                                          @error('directorate_phone')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                        </div>
                  
                                        <div class="form-group">
                                            <label for="directorate_website">Website Link:*</label>
                                            <input type="directorate_website" class="form-control" id="directorate_website" name="directorate_website"  placeholder="Enter Website Url ">
                                                      @error('directorate_website')
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
              <h3 class="card-title">निर्देशनालय लिस्ट </h3>
            </div>
            
            <div class="work-area" style="margin-top: 30px;">
 <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>क्र.म:</th>
                          <th>निर्देशनालयको नाम:</th>
                          <th>फोन नो.:</th>
                          <th>इमेल:</th>
                          <th>वेबसाइट:</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                        
                   
                      @foreach ($directorates as $directorate)
                      <tr>       
                         <td>{{$loop->iteration}}</td>
                         <td>{{$directorate->directorate_name}} </td>
                         <td>{{$directorate->directorate_phone}} </td>
                         <td>{{$directorate->directorate_email}} </td>
                         <td>{{$directorate->directorate_website}} </td>
                       <td>
                        &nbsp;<a href="{{route('directorate.edit',$directorate->id)}}"><button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button></a>
                  <form class="float-left" action="{{route('directorate.destroy',$directorate)}}" method="Post">
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
