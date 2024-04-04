@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>पूर्वाधार थप्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">पूर्वाधार थप्नुहोस्</li>
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
            <form role="form" action="{{route('infrastructure.store')}}" method="post" enctype="multipart/form-data">
              @include('alert.alert')
              <div class="card-body">
                @csrf
                <div class="form-group">
                    <label for="school">जम्मा विद्यालय:*</label>
                    <input type="text" class="form-control" id="school" name="school" value="{{$infrastructure->school}}" placeholder="Enter School's Number ">
                    @error('school')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="hospital">जम्मा स्वास्थ्य सुविधा केन्द्र:*</label>
                    <input type="text" class="form-control" id="hospital" name="hospital" value="{{$infrastructure->hospital}}"  placeholder="Enter Hospital's Number ">
                    @error('hospital')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="employment_office">जम्मा रोजगार केन्द्र:*</label>
                    <input type="text" class="form-control" id="employment_office" name="employment_office" value="{{$infrastructure->employment_office}}" placeholder="Enter Employement's Office Number ">
                    @error('employment_office')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="university">जम्मा विश्व विद्यालय:*</label>
                    <input type="text" class="form-control" id="university" name="university" value="{{$infrastructure->university}}" placeholder="Enter Employement's Office Number ">
                    @error('university')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="population">जम्मा जनसंख्या:*</label>
                    <input type="text" class="form-control" id="population" name="population" value="{{$infrastructure->population}}" placeholder="Enter Employement's Office Number ">
                    @error('population')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="social_organization">जम्मा सामाजिक संघ/ संस्था:*</label>
                    <input type="text" class="form-control" id="social_organization" name="social_organization" value="{{$infrastructure->social_organization}}" placeholder="Enter Employement's Office Number ">
                    @error('social_organization')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>मिति: *</label>
                  <input type="text" id="nepali-datepicker"  value="{{$infrastructure->update_date}} "  class="form-control @error('update_date') is-invalid @enderror" name="update_date" placeholder="Please enter date here." />
              @error('update_date')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
                  </div>
                  <div class="form-group">

                    <input type="submit" value="Update" name="submit" class="btn btn-success ">

                </div>
            </form>
          </div>
         

         


        </div>
        
      </div>
     
    </div>
  </section>

@endsection
