
@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>पुर्व कार्यालय प्रमुख सम्पादन गर्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item"><a href="{{route('ex_employee.index')}}">पुर्व कार्यालय प्रमुख लिस्ट</a></li>
            <li class="breadcrumb-item active">पुर्व कार्यालय प्रमुख सम्पादन गर्नुहोस्</li>
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
            <form role="form" method="POST" action="{{route('ex_employee.update',$ex_employee->id)}}" enctype="multipart/form-data">
              @csrf
                {{method_field('PUT')}}
              <div class="card-body">
                <div class="form-group">
                    <label for="name">नाम:*</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Employee name ?" name="name" value="{{$ex_employee->name ?? ''}}">
                    @error('name')
          {{$message}}
          @enderror
                  </div>
                  <!--<div class="form-group">
                    <label for="department">समुह:*</label>
                    <input type="text" class="form-control" id="department" placeholder="Enter department name ?" name="department" value="{{$ex_employee->department ?? ''}}">
                    @error('department')
          {{$message}}
          @enderror
                  </div>-->
                  <div class="form-group">
                    <label for="designation">पद:*</label>
                    <input type="text" class="form-control" id="designation" placeholder="Enter designation name ?" name="designation" value="{{$ex_employee->designation ?? ''}}">
                    @error('designation')
          {{$message}}
          @enderror
                  </div>
                <!--<div class="form-group">
                  <label for="level">तह</label>
                  <input type="text" name="level" class="form-control" id="level" placeholder="Enter level " value="{{$ex_employee->level ?? ''}}">

                  @error('level')
          {{$message}}
          @enderror
                </div>-->
                <div class="form-group">
                  <label for="photo"> फोटो: *</label>
                  <div class="input-group">
                    <div class="custom-file">
                    <input type="file" name="photo" id="photo" class="form-control" value="{{$ex_employee->photo ?? ''}}">
                    </div>
                    
                  </div>
                  @error('photo')
          {{$message}}
          @enderror
                </div>
                <div class="form-group">
                <label for="phone">फोन न.</label>
                    <input type="number" class="form-control" id="phone" placeholder="Enter phone number " name="phone" value="{{$ex_employee->phone ?? ''}}">
@error('phone')
          {{$message}}
          @enderror                  </div>
                  <div class="form-group">
                    <label for="email">इमेल </label>
                    <input type="exampleInputEmail1" class="form-control" id="email" placeholder="Enter email ?" name="email" value="{{$ex_employee->email ?? ''}}">
                    @error('email')
          {{$message}}
          @enderror
                  </div>
                <div class="form-group">
                  <label for="address">ठेगाना</label>
                  <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="{{$ex_employee->address ?? ''}}">
                  @error('address')
          {{$message}}
          @enderror
                </div>
                <div class="form-group">
                    <label for="date">कार्यरत मिति:</label>
                    <input type="text" class="form-control" id="date" placeholder="Enter date" name="date" value="{{$ex_employee->date ?? ''}}">
                    @error('date')
            {{$message}}
            @enderror
                  </div>
                  <div class="form-group">
                    <label for="lastdate">हालसम्मको मिति</label>
                    <input type="text" class="form-control" id="lastdate" placeholder="Enter lastdate" name="lastdate" value="{{$ex_employee->lastdate ?? ''}}">
                    @error('lastdate')
            {{$message}}
            @enderror
                  </div>
                <div class="form-group">
                  <label for="position">position</label>
                  <input type="text" class="form-control" id="position" placeholder="position" name="position" value="{{$ex_employee->position ?? ''}}">
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