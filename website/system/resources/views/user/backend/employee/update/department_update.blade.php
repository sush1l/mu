@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>समुह अपडेट गर्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">समुह</li>
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
            @include('alerts.alert')
            <form role="form" method="POST" action="{{route('department.update',$department->id)}}">
              @csrf
              {{method_field('PUT')}}
              <div class="card-body">
                <div class="form-group">
                    <label for="department_name">शाखाको नाम:*</label>
                    <input type="text" class="form-control" id="department" placeholder="Enter  department name " name="department_name" value="{{$department->department_name}}">
                    @error('department_name')
          {{$message}}
          @enderror
                  </div>
                <button type="submit" class="btn btn-primary float-sm-right" name="submit">update</button>
              
</div>
</form>
</div>
</div>
</div>
</div>
</section>
@endsection