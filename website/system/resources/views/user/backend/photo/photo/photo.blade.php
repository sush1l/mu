@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>फोटो ग्यालरी </h1>
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
            <form role="form" method="POST" action="{{route('photo.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="photo_name"> नाम:*</label>
                    <input type="text" class="form-control" id="photo_title" placeholder="Enter photo name " name="photo_title">
                    @error('photo_title')
          {{$message}}
          @enderror
                  </div>
                  <div class="form-group">
                    <label for="photo_album_id">एल्बम वर्ग छान्नुहोस्*</label>
                    <select name="photo_album_id" id="photo_album_id" class="form-control">
                    <option value="">--कृपया एल्बम वर्ग छान्नुहोस्--</option>
                    @foreach($photo_albums as $photo_album)
                    <option value="{{$photo_album->id}}">
                    {{$photo_album->album_name}}
                  </option>
                  @endforeach
                  </select>
                    @error('photo_album_id')
          {{$message}}
          @enderror
                  </div>
                       <div class="form-group">
                  <label for="exampleInputFile">फोटो: *</label>
                  <div class="input-group">
                    <div class="custom-file">
      <input type="file" name="photo" id="photo" class="form-control">
                    </div>
                    
                  </div>
                  @error('photo')
          {{$message}}
          @enderror
                </div>
   
                <button type="submit" class="btn btn-primary float-sm-right">Submit</button>
              
</div>
</form>
</div>
</div>
</div>
</div>
</section>

<h6 style="font-weight: bold;margin: 30px;">फोटो ग्यालरी लिस्ट</h6>
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
            <th>एल्बमको नाम</th>
            <th>कभर फोटोको नाम</th>
            <th>फोटो</th>
            <th>Action</th>
           

        </tr>
    </thead>
    <tbody>
      @foreach( $photos as $photos)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$photos->photo_title}}</td>
             <td>{{$photos->photo_album->album_name}}</td>
            <td><img src="{{asset('storage/assets/photo/'.$photos->photo)}}" width="80"></td>
            <td>
              <a href="{{route('photo.edit',$photos->id)}}">
                 <button class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-edit"></i></button></a>
                 
             <form  class="float-left" action="{{route('photo.destroy',$photos)}}" method="POST">
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