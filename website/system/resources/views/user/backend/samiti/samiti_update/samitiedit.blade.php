
@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> स‌ञ्चालक समिति गर्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item"><a href="{{route('samiti.index')}}">स‌ञ्चालक समिति लिस्ट</a></li>
            <li class="breadcrumb-item active"> स‌ञ्चालक समिति सम्पादन गर्नुहोस्</li>
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
            <form role="form" method="POST" action="{{route('samiti.update',$samiti->id)}}" enctype="multipart/form-data">
              @csrf
                {{method_field('PUT')}}
              <div class="card-body">
                <div class="form-group">
                    <label for="name">नाम:*</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Samiti name ?" name="name" value="{{$samiti->name ?? ''}}">
                    @error('name')
          {{$message}}
          @enderror
                  </div>
                 
                  <div class="form-group">
                    <label for="designation">पद:*</label>
                    <input type="text" class="form-control" id="designation" placeholder="Enter designation name ?" name="designation" value="{{$samiti->designation ?? ''}}">
                    @error('designation')
          {{$message}}
          @enderror
                  </div>
                
                <div class="form-group">
                <label for="phone">फोन न.</label>
                    <input type="number" class="form-control" id="phone" placeholder="Enter phone number " name="phone" value="{{$samiti->phone ?? ''}}">
@error('phone')
          {{$message}}
          @enderror                  </div>
              
                <div class="form-group">
                  <label for="address">ठेगाना</label>
                  <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="{{$samiti->address ?? ''}}">
                  @error('address')
          {{$message}}
          @enderror
                </div>
            
                <div class="form-group">
                  <label for="position">position</label>
                  <input type="text" class="form-control" id="position" placeholder="position" name="position" value="{{$samiti->position ?? ''}}">
                  @error('position')
          {{$message}}
          @enderror
                
                <div class="form-check">
                  <label for="status">Status</label><br>
               <input type="radio" id="male" name="status" value="0">
<label for="active">Active</label><br>
<input type="radio" id="inactive" name="status" value="1">
<label for="inactive">Inactive</label><br>            </div>
                </div>
            
              <!-- /.card-body -->

             
                <button type="submit" class="btn btn-primary float-sm-right" name="submit">Submit</button>
              
            </form>
          </div>
          <!-- /.card -->

         


        </div>
        
      </div>
     
    </div>
  </section>

@endsection