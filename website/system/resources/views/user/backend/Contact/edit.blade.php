
@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>सम्पर्क थप्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('contact.index')}}">सम्पर्क थप्नुहोस्</a></li>
            <li class="breadcrumb-item active">लिंक थप्नुहोस्</li>
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
            
            <form role="form" Action="{{route('contact.update', $contact->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="card-body">
                @include('alert.alert')
                <div class="form-group">
                    <label for="full_name">Name:*</label>
                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Enter Name " value="{{$contact->full_name}}">
                    @error('full_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone:*</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone" value="{{$contact->phone}}">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
         </div>
        
      </div>
     
    </div>
  </section>
  

@endsection







