@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>एल्बम थप्नुहोस्</h1>
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
            <form role="form" method="POST" action="{{route('photo_album.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="album_name">एल्बमको नाम:*</label>
                    <input type="text" class="form-control" id="album_name" placeholder="Enter album name " name="album_name">
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
   
                <button type="submit" class="btn btn-primary float-sm-right" name="submit">Submit</button>
              
</div>
</form>
</div>
</div>
</div>
</div>
</section>

<h6 style="font-weight: bold;margin: 30px;">एल्बम लिस्ट</h6>
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-disable">
            <div class="card-header">

<table id="myTable" class="display" style="width: 100%;">
    <thead>
        <tr>
            <th>S.N</th>
            <th>एल्बमको</th>
            <th>कभर फोटो</th>
            <th>Action</th>
           

        </tr>
    </thead>
    <tbody>
        @foreach( $photo_album as $photo_album)
         <tr>
            <td>{{$loop -> iteration}}</td>
            <td>{{$photo_album -> album_name}}</td>
            <td><img src="{{asset('storage/assets/photo/'.$photo_album->cover_photo)}}" width="80"></td>
            <td>
             <a href="{{route('photo_album.edit',$photo_album->id)}}">
                <button class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-edit"></i></button></a>
                
            <form  class="float-left" action="{{route('photo_album.destroy',$photo_album)}}" method="POST">
              @csrf
              {{method_field('DELETE')}}
            <button class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></button>
          </form></td>

           @endforeach
        </tr>
        
    </tbody>
</table>
</form>
</div>
</div>
</div>
</div>
</div>
</section>

@endsection