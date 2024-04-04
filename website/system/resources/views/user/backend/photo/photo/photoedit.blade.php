@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>फोटो अपडेट गर्नुहोस् </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
             <li class="breadcrumb-item"><a href="#">ग्यालरी </a></li>
            <li class="breadcrumb-item active">फोटो ग्यालरी</li>
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
            <form role="form" method="POST" action="{{route('photo.update',$photo->id)}}" enctype="multipart/form-data">
              @csrf
              {{method_field('PUT')}}
              <div class="card-body">
                <div class="form-group">
                    <label for="photo_name"> नाम:*</label>
                    <input type="text" class="form-control" id="photo_title" placeholder="Enter photo name " name="photo_title" value="{{$photo->photo_title}}" >
                    @error('photo_title')
          {{$message}}
          @enderror
                  </div>
                  <div class="form-group">
                    <label for="photo_album_id">एल्बम वर्ग छान्नुहोस्*</label>
                    <select name="photo_album_id" id="photo_album_id" class="form-control" >
                    <option value="">--कृपया एल्बम वर्ग छान्नुहोस्--</option>
                    @foreach ($photo_albums as $photo_album)
                    <option value="{{$photo_album->id}}"  @if($photo_album->id==$photo->photo_album_id) selected='selected'
                     @endif >
 
                     {{$photo_album->album_name}}</option>
                        
                    @endforeach
                  </select>
                    @error('photo_album_id')
          {{$message}}
          @enderror
                  </div>
                       <div class="form-group">
                  <label for="photo">फोटो: *</label>
                  <div class="input-group">
                    <div class="custom-file">
      <input type="file" name="photo" id="photo" class="form-control" value="{{$photo->photo}}">
                    </div>
                    
                  </div>
                  @error('photo')
          {{$message}}
          @enderror
                </div>
                <div class="form-group">
  
                  <button type="submit" class="btn btn-primary float-sm-right" name="submit">update</button>
               </div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>



@endsection