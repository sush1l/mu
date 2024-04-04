@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>लिंक सम्पादन गर्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">लिंक सम्पादन गर्नुहोस्</li>
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
            <form role="form" Action="{{route('link.update',$link)}} " method="post" enctype="multipart/form-data">
              @csrf
              {{method_field('PUT')}}
              <div class="card-body">
                @include('alert.alert')
                <div class="form-group">
                    <label for="link_name">लिंकको शिर्षक:*</label>
                    <input type="text" class="form-control" id="link_name" name="link_name" value="{{$link->link_name}}" placeholder="Enter link Title ">
                    @error('link_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="url">लिंक Url:*</label>
                    <input type="text" class="form-control" id="url" name="url"  value="{{$link->url}}" placeholder="Enter link url" class="form-control @error('title') is-invalid @enderror">
                    @error('url')
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
