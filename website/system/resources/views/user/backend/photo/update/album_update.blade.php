@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>एल्बम  अपडेट गर्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
             <li class="breadcrumb-item"><a href="#">ग्यालरी </a></li>
            <li class="breadcrumb-item active">एल्बम थप्नुहोस्</li>
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
            <form role="form" method="POST" action="{{route('photo_album.update',$photo_album->id)}}" enctype="multipart/form-data">
              {{method_field('PUT')}}
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="album_name">एल्बमको नाम:*</label>
                    <input type="text" class="form-control" id="album_name" placeholder="Enter album name " name="album_name" value="{{$photo_album->album_name}}">
                    @error('album_name')
          {{$message}}
          @enderror
                  </div>
                       <div class="form-group">
                  <label for="cover_photo">कभर फोटो</label>
                  <div class="input-group">
                    <div class="custom-file">
      <input type="file" name="cover_photo" id="fileToUpload" class="form-control">
                    </div>
                    
                  </div>
                  @error('cover_photo')
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