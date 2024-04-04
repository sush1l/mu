@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>कर्मचारी अपडेट गर्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item"><a href="employee_list">कर्मचा लिस्ट</a></li>
            <li class="breadcrumb-item active">कर्मचारी थप्नुहोस</li>
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
            <form role="form" method="POST" action="{{route('employee.update',$employee)}}" enctype="multipart/form-data">
              
              @csrf
              {{method_field('PUT')}}
              <div class="card-body">
                <div class="form-group">
                    <label for="name">नाम:*</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Employee name ?" name="name" value="{{$employee->name}}">
                    @error('name')
          {{$message}}
          @enderror
                  </div>
                  <!--<div class="form-group">
                    <label for="department_id">समुह*</label>
                    <select name="department_id" id="department_id" class="form-control" >
                    <option value="">--कृपया समुह छान्नुहोस्--</option>
                    @foreach ($departments as $department)
                    <option value="{{$department->id}}" @if($department->id==$employee->department_id) selected='selected' @endif>
                    {{$department->department_name}}
                  </option>
                  @endforeach
                  </select>
                    @error('department_id')
          {{$message}}
          @enderror
                  </div>-->
                <div class="form-group">
                  <label for="designation_id">पद</label>
                 <select name="designation_id" id="designation_id" class="form-control">
                   <option value="">--कृपया पद छान्नुहोस्--</option>
                   @foreach ($designations as $designation)
                   <option value="{{$designation->id}}" @if($designation->id==$employee->designation_id) selected='selected' @endif>{{$designation->designation_name}}</option>
                       
                   @endforeach
                 </select>
                  @error('designation_id')
          {{$message}}
          @enderror
                </div>
                <!--<div class="form-group">
                  <label for="level">तह</label>
                  <input type="text" name="level" class="form-control" id="level" placeholder="Enter level " value="{{$employee->level}}">

                  @error('level')
          {{$message}}
          @enderror
                </div>-->
                <div class="form-group">
                  <label for="fileToUpload"> फोटो: *</label>
                  <div class="input-group">
                    <div class="custom-file">
      <input type="file" name="photo" id="fileToUpload" class="form-control" value="{{$employee->photo}}">
                    </div>
                    
                  </div>
                  @error('photo')
          {{$message}}
          @enderror
                </div>
                <div class="form-group">
                <label for="phone">फोन:</label>
                    <input type="number" class="form-control" id="phone" placeholder="Enter phone number " name="phone" value="{{$employee->phone}}">
@error('phone')
          {{$message}}
          @enderror                  </div>
                  <div class="form-group">
                    <label for="email">इमेल</label>
                    <input type="exampleInputEmail1" class="form-control" id="email" placeholder="Enter email ?" name="email" value="{{$employee->email}}">
                    @error('email')
          {{$message}}
          @enderror
                  </div>
               <!-- <div class="form-group">
                  <label for="address">ठेगाना</label>
                  <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="{{$employee->address}}">
                  @error('address')
          {{$message}}
          @enderror
                </div>-->
                <div class="form-group">
                  <label for="position">position</label>
                  <input type="text" class="form-control" id="position" placeholder="position" name="position" value="{{$employee->position}}">
                  @error('position')
          {{$message}}
          @enderror
                
                <div class="form-check">
                  <label for="status">Status</label><br>
               <input type="radio" id="male" name="status" value="0" @if($employee->status == 0) checked='checked' @endif >
<label for="active">Active</label><br>
<input type="radio" id="inactive" name="status" value="1" @if($employee->status == 1) checked='checked' @endif>
<label for="inactive">Inactive</label><br>            </div>
                </div>
            
              <!-- /.card-body -->

             
                <button type="submit" class="btn btn-primary float-sm-right" name="submit">update</button>
              
            </form>
          </div>
          <!-- /.card -->

         


        </div>
        
      </div>
     
    </div>
  </section>

@endsection