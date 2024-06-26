@extends('layouts.header')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> सामाजिक क्षेत्र थप्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item"><a href=""> सामाजिक क्षेत्र</a></li>
            <li class="breadcrumb-item active"> सामाजिक क्षेत्र थप्नुहोस्</li>
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
            <form role="form" method="POST" action="{{route('social_region.store')}}" enctype="multipart/form-data">
               @csrf
              <div class="card-body">
                <div class="form-group">
  <div class="form-group">
    <label for="social_region_title">शिर्षक *</label>
    <input type="text" name="social_region_title" class="form-control" id="name">
     </select>
    @error('social_region_title')
          {{$message}}
          @enderror
  </div>
  

  <div class="form-group">
                  <label for="social_region_category_id">वर्ग छान्नुहोस्</label>
                  <select name="social_region_category_id" id="social_region_category_id" class="form-control">
                  <option value="">--कृपया समुह छान्नुहोस्--</option>
                    @foreach($social_region_categories as $social_region_category)
                    <option value="{{$social_region_category->id}}">
                    {{$social_region_category->social_region_category_name}}
                  </option>
                  @endforeach
                  </select>
                  @error('social_region_category_id')
          {{$message}}
          @enderror
                </div>
                
       <div class="form-group">
    <label for="file">फाइल *</label>
    <input type="file" name="file" class="form-control" id="photo">
     </select>
    @error('file')
          {{$message}}
          @enderror
  </div>

<div class="form-group">
    <label for="social_region_date">प्रकाशित मिति</label>
    <input type="text" name="social_region_date" class="form-control" id="nepali-datepicker">
   @error('social_region_date')
          {{$message}}
          @enderror
  </div>

  <div class="form-group">
  
    <input type="submit" name="submit" class="form-control btn btn-primary float-sm-right col-md-2" value="Submit" >
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