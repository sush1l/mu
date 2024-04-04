@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>कार्यालयको नाम थप्नुहोस</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">कार्यालयको नाम थप्नुहोस</li>
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
            @include('alert.alert')
            <form role="form" Action="{{route('sub_ordinates.store')}} " method="post" enctype="multipart/form-data">
             @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="sub_ordinate_name">कार्यालयको नाम:*</label>
                    <input type="text" class="form-control" id="sub_ordinate_name" name="sub_ordinate_name"  placeholder="Enter Office Name ">
                    @error('sub_ordinate_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="sub_ordinate_email">इमेल:*</label>
                    <input type="email" class="form-control" id="sub_ordinate_email" name="sub_ordinate_email"  placeholder="Enter Email ">
                              @error('sub_ordinate_email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                            <div class="form-group">
                                <label for="sub_ordinate_phone">Phone Number:*</label>
                                <input type="phone" class="form-control" id="sub_ordinate_phone" name="sub_ordinate_phone"  placeholder="Enter Phone Number ">
                                          @error('sub_ordinate_phone')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                        </div>
                  
                                        <div class="form-group">
                                            <label for="sub_ordinate_website">Website Link:*</label>
                                            <input type="url" class="form-control" id="sub_ordinate_website" name="sub_ordinate_website"  placeholder="Enter Website Url ">
                                                      @error('sub_ordinate_website')
                                                      <span class="invalid-feedback" role="alert">
                                                          <strong>{{ $message }}</strong>
                                                      </span>
                                                  @enderror
                                                    </div>
                                                   <div class="form-group">
                         <label for="directorate_id">निर्देशनालयको नाम: *</label>
                                <select class="form-control" name="directorate_id" >
                                       <option value="">--कृपया निर्देशनालय छान्नुहोस्--</option>
                                       @foreach($directorates as $directorate)
                                       <option value="{{$directorate->id}}">
                                       {{$directorate->directorate_name}}
                                     </option>
                                     @endforeach   
                                           </select>
                                                        @error('directorate_id')
                                                        
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

  

@endsection
