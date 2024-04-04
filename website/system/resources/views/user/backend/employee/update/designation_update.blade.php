@extends('layouts.header')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>पद अपडेट गर्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">पद</li>
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
            <form role="form" method="POST" action="{{route('designation.update',$designation)}}">
              @csrf
              {{method_field('PUT')}}
              <div class="card-body">
                <div class="form-group">
                    <label for="designation_name">पदको नाम:*</label>
                    <input type="text" class="form-control" id="designation" placeholder="Enter  designation name ?" name="designation_name" value="{{$designation->designation_name}}">
                    @error('designation_name')
          {{$message}}
          @enderror
                  </div>
                <button type="submit" class="btn btn-primary float-sm-right" name="update">update</button>
              
</div>
</form> 
</div>

</div>
</div>
</div>
</section>
@endsection