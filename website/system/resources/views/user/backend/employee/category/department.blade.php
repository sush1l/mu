@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>समुह थप्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">समुह</li>
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
            <form role="form" method="POST" action="{{route('department.store')}}">
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="department_name">शाखाको नाम:*</label>
                    <input type="text" class="form-control" id="department" placeholder="Enter  department name ?" name="department_name">
                    @error('department_name')
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


<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">समुह लिस्ट</h3>
          </div>
          
          <div class="work-area" style="margin-top: 30px;">
<table id="myTable" class="display" style="width: 100%;">
    <thead>
        <tr>
            <th>S.N</th>
            <th>नाम</th>
            <th>Action</th>
           

        </tr>
    </thead>
    <tbody>
    @foreach( $departments as $department)
        <tr>
            <td>{{$loop -> iteration}}</td>
            <td>{{$department-> department_name}}</td>
            <td>
                       <a href="{{route('department.edit',$department->id)}}">
                <button class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-edit"></i></button></a>
                
            <form  class="float-left" action="{{route('department.destroy',$department)}}" method="POST">
              @csrf
              {{method_field('DELETE')}}
            <button class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></button>
          </form>
        </td>

            
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