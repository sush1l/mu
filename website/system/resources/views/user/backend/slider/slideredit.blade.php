@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>स्लाइडर इदित गर्नहोस्:</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">स्लाइडर इदित गर्नहोस्</li>
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
            <form role="form" Action="{{route('slider.update',$slider)}} " method="post" enctype="multipart/form-data" >
              @include('alert.alert')
              @csrf
              {{method_field('PUT')}}
              <div class="card-body">
                <div class="form-group">
                    <label for="title">स्लाइडरको शिर्षक: *</label>
                    <input type="text" name="title" value="{{$slider->title}} " class="form-control @error('title') is-invalid @enderror">
                      @error('title')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  </div>
                  <div class="form-group">
                        <label for="photo">स्लाइडरको फोटो: *</label><br>
                        <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror">
                      @error('photo')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                    </div>
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
  
    <!-- /.content -->
  </div>

@endsection
