@extends('layouts.header')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> योजना/ कार्यक्रम अपडेट गर्नुहोस</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item"><a href=""> योजना/ कार्यक्रम</a></li>
            <li class="breadcrumb-item active"> योजना/ कार्यक्रम थप्नुहोस्</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
            @include('alerts.alert')

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
            <form role="form"  method="POST" action="{{route('dastabej.update',$dastabej->id)}}" enctype="multipart/form-data">
              @csrf
              {{method_field('PUT')}}
              <div class="card-body">
                <div class="form-group">
  <div class="form-group">

    <label for="dastabej_title">शिर्षक *</label>
    <input type="text" name="dastabej_title" class="form-control" id="name" value="{{$dastabej->dastabej_title}}">
   @error('dastabej_title')
          {{$message}}
          @enderror
  </div>

  

<div class="form-group">
                  <label for="category">वर्ग छान्नुहोस्</label>
                  
                   <select name="dastabej_category_id" id="dastabej_category" class="form-control">
                   
                    @foreach($dastabej_categorie as $dastabej_category)
                    <option value="{{$dastabej_category->id}}"  @if($dastabej_category->id==$dastabej->dastabej_category_id) selected='selected' @endif>
                    {{$dastabej_category->dastabej_category_name}}
                  </option>
                  @endforeach
                  </select>
                  @error('dastabej_category_id')
          {{$message}}
          @enderror
                </div>
       <div class="form-group">
    <label for="file">फाइल *</label>
    <input type="file" name="file" class="form-control" id="photo" value="{{$dastabej->file}}">
    @error('file')
          {{$message}}
          @enderror
  </div>
  
   <div class="form-group">
    <label for="dastabej_date">प्रकाशित मिति</label>
    <input type="text" name="dastabej_date" class="form-control" id="nepali-datepicker" value="{{$dastabej->dastabej_date}}">
   @error('dastabej_date')
          {{$message}}
          @enderror
  </div>



  <div class="form-group">
  
   <button type="submit" class="btn btn-primary float-sm-right" name="submit">update</button>
  </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>

@endsection