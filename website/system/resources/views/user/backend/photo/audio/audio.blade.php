@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>अडियो ग्यालरी </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
             <li class="breadcrumb-item"><a href="#">ग्यालरी </a></li>
            <li class="breadcrumb-item active">अडियो ग्यालरी</li>
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
            <form role="form">
              <div class="card-body">
                <div class="form-group">
                    <label for="audio_name"> नाम:*</label>
                    <input type="text" class="form-control" id="audio_name" placeholder="Enter audio name " name="audio_name">
                    @error('album_name')
          {{$message}}
          @enderror
     
                       <div class="form-group">
                  <label for="exampleInputFile">अडियो: *</label>
                  <div class="input-group">
                    <div class="custom-file">
      <input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                    </div>
                    
                  </div>
                  @error('exampleInputFile')
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

<h6 style="font-weight: bold;margin: 30px;">अडियो ग्यालरी लिस्ट</h6>
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
            <th>अडियो</th>
            <th>Action</th>
           

        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>computer operator</td>
            <td><audio controls>
  <source src="" type="audio/ogg">
  <source src="" type="audio/mpeg">
  
</audio>
 </td>
            <td>
            <form action="" method="POST" onclick="return confirm('Are you sure you want to delete this item?');">
              @csrf
              {{method_field('DELETE')}}
            <button class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></button>
               <a href="#"><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-edit"></i></button></a></td>

            
        </tr>
         <tr>
            <td>2</td>
            <td>computer operator</td>
            <td><audio controls>
  <source src="" type="audio/ogg">
  <source src="" type="audio/mpeg">
  
</audio></td>
            <td>
            <form action="" method="POST" onclick="return confirm('Are you sure you want to delete this item?');">
              @csrf
              {{method_field('DELETE')}}
            <button class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i></button>
               <a href="#"><button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-edit"></i></button></a></td>

           
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