@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>वर्ग थप्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
             <li class="breadcrumb-item"><a href="#">सामाजिक क्षेत्रज </a></li>
            <li class="breadcrumb-item active">वर्ग थप्नुहोस्</li>
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
            <form role="form" method="POST" action="{{route('social_region_category.store')}}">
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="social_region_category_name">वर्गको नाम:*</label>
                    <input type="text" class="form-control" id="category" placeholder="Enter category name" name="social_region_category_name">
                    @error('social_region_category_name')
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

<h6 style="font-weight: bold;margin: 30px;">सामाजिक क्षेत्रज वर्ग लिस्ट</h6>
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
          <th>S.n</th>
            <th>नाम</th>
            <th>Action</th>
           

        </tr>
    </thead>
    <tbody>
      @foreach($social_region_categories as $social_region_category)
        <tr>
          <td>{{$loop->iteration}} </td>
            <td>{{ $social_region_category->social_region_category_name }}</td>
                     <td>
           <a href="{{route('social_region_category.edit',$social_region_category->id)}}">
                <button class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-edit"></i></button></a>
                
            <form  class="float-left" action="{{route('social_region_category.destroy',$social_region_category)}}" method="POST">
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