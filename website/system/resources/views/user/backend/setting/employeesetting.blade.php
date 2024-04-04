@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>कर्मचारी सेटिंग:</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">कर्मचारी सेटिंग</li>
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
            @include('alert.alert')
            <form role="form" Action="{{route('setting_employee.update',$minister->id)}}" method="POST" enctype="multipart/form-data">
              
              @csrf
              {{method_field('PUT')}}
              <div class="card-body">
                <div class="form-group">
                  <label>कार्यालय प्रमुख </label>
                  <select class="form-control select2" name="employee_id" style="width: 100%;">
                    <option >कार्यालय प्रमुख ज्यु</option>
                   @foreach ($employees as $employee)
                       <option value="{{$employee->id}}" @if ($employee->id==$minister->employee_id)
                           selected="selected"
                       @endif>{{$employee->name}}</option>
                   @endforeach
                    
                  </select>
                  @error('employee_id')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                  @enderror
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              <hr>
              <form Action="{{route('setting_employee.update',$sachib->id)}}" method="POST">
            
                @csrf
                {{method_field('PUT')}} 
                <div class="form-group">
                    <label>सूचना अधिकारी ज्यु</label>
                    <select class="form-control select2" name="employee_id" style="width: 100%;">
                      <option selected="selected">सूचना अधिकारी ज्यु</option>
                      @foreach ($employees as $emplu)
                       <option value="{{$emplu->id}}"  @if ($emplu->id==$sachib->employee_id)
                        selected="selected"
                    @endif>{{$emplu->name}}</option>
                   @endforeach
                      
                    </select>
                    @error('employee_id')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                    @enderror
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
                
                  
          </div>
         

         


        </div>
        
      </div>
     
    </div>
  </section>
    <!-- /.content -->
  </div>

@endsection
