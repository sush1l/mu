@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>निदेशानालय सम्पादन गार्नुहोस</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">निदेशानालय सम्पादन गार्नुहोस</li>
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
            <form role="form" Action="{{route('directorate.update',$directorate)}} " method="post" enctype="multipart/form-data">
              @include('alert.alert')
              @csrf
             {{method_field('PUT')}}
              <div class="card-body">
                <div class="form-group">
                    <label for="directorate_name">निदेशानालयको नाम:*</label>
                  <input type="directorate_name" class="form-control" id="directorate_name" name="directorate_name" value="{{$directorate->directorate_name}}" placeholder="Enter Directrote Name ">
                    @error('directorate_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="directorate_email">इमेल:*</label>
                    <input type="directorate_email" class="form-control" id="directorate_email" name="directorate_email" value="{{$directorate->directorate_email}}" placeholder="Enter Email ">
                              @error('directorate_email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                            <div class="form-group">
                                <label for="directorate_phone">Phone Number:*</label>
                                <input type="directorate_phone" class="form-control" id="directorate_phone" name="directorate_phone" value="{{$directorate->directorate_phone}}" placeholder="Enter Phone Number ">
                                          @error('directorate_phone')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                        </div>
                  
                                        <div class="form-group">
                                            <label for="directorate_website">Website Link:*</label>
                                            <input type="directorate_website" class="form-control" id="directorate_website" name="directorate_website" value="{{$directorate->directorate_website}}" placeholder="Enter Website Url ">
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
  

@endsection
