@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>सामाजिक छेत्र वर्ग अपडेट गर्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
             <li class="breadcrumb-item"><a href="#">सामाजिक क्षेत्रज </a></li>
            <li class="breadcrumb-item active">वर्ग अपडेट गर्नुहोस्</li>
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
            <form role="form" method="POST" action="{{route('social_region_category.update',$social_region_category)}}">
              @csrf
               {{method_field('PUT')}}
              <div class="card-body">
                <div class="form-group">
                    <label for="social_region_category_name">वर्गको नाम:*</label>
                    <input type="text" class="form-control" id="category" placeholder="Enter category name" name="social_region_category_name" value="{{$social_region_category->social_region_category_name}}">
                    @error('social_region_category_name')
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
