@extends('layouts.header')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> योजना/ कार्यक्रम थप्नुहोस्</h1>
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
            <form role="form"  method="POST" action="{{route('dastabej.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
  <div class="form-group">

    <label for="dastabej_title">शिर्षक *</label>
    <input type="text" name="dastabej_title" class="form-control" id="name">
   @error('dastabej_title')
          {{$message}}
          @enderror
  </div>

  

<div class="form-group">
                  <label for="category">वर्ग</label>
                  
                   <select name="dastabej_category_id" id="dastabej_category" class="form-control">
                    <option value="">--कृपया समुह छान्नुहोस्--</option>
                    @foreach($dastabej_categorie as $dastabej_category)
                    <option value="{{$dastabej_category->id}}">
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
    <input type="file" name="file" class="form-control" id="photo">
    @error('file')
          {{$message}}
          @enderror
  </div>
  
   <div class="form-group">
    <label for="dastabej_date">प्रकाशित मिति</label>
    <input type="text" name="dastabej_date" class="form-control" id="nepali-datepicker">
   @error('dastabej_date')
          {{$message}}
          @enderror
  </div>



  <div class="form-group">
  
    <input type="submit" name="submit" class="form-control btn btn-primary float-sm-right col-md-2" value="Submit" name="submit" >
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