@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>भिडियो ग्यालरी </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
             <li class="breadcrumb-item"><a href="#">ग्यालरी </a></li>
            <li class="breadcrumb-item active">भिडियो ग्यालरी</li>
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
            @include('alert.alert')
            <form role="form" method="POST" action="{{route('video.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="video_title">भिडियोको नाम:*</label>
                    <input type="text" class="form-control" id="video_title" placeholder="Enter video name " value="{{old('video_title')}}" name="video_title">
                    @error('video_title')
          {{$message}}
          @enderror
          </div>
     
          <div class="form-group">
            <label for="video">भिडियो: *</label>
            <div class="input-group">
              <div class="custom-file">
                <textarea name="video" id="video"  class="form-control" >{{old('video')}}</textarea>

              </div>
              
            </div>
            @error('video')
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

<h6 style="font-weight: bold;margin: 30px;">भिडियो ग्यालरी लिस्ट</h6>
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
            <th>नाम</th>
            <th>भिडियो</th>
            <th>Action</th>
           

        </tr>
    </thead>
    <tbody>
      @foreach ($videos as $video)
          
     
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$video->video_title}}</td>
            <td style="width:40%;"><iframe width="100%" height="250" value="{!!$video->video!!}
            </iframe>
 </td>
 <td>
 
 <form  class="float-left" action="{{route('video.destroy',$video)}}" method="POST">
   @csrf
   {{method_field('DELETE')}}
 <button class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></button>
</form></td>
        </tr>
        @endforeach
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