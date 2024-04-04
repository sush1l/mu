
@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>सम्पर्क समूह थप्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('Group.index')}}">सम्पर्क समूह थप्नुहोस्</a></li>
            <li class="breadcrumb-item active">सम्पर्क समूह थप्नुहोस्</li>
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
            
            <form role="form" Action="{{route('Group.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                @include('alert.alert')
                <div class="form-group">
                    <label for="name">Group Name:*</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Group Name">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="phone">Contact:*</label>
                    @foreach($contacts as $contact)
                    <input type="checkbox" name="contacts[]" id="contact{{$loop->iteration}}" value="{{$contact->id}}">
                        <label for="contact{{$loop->iteration}}">{{$contact->full_name ?? 'unknown Contact'}}({{$contact->phone}})</label><br>
                    @endforeach
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




