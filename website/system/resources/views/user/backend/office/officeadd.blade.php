@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>कार्यालय विवरण थप्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">कार्यालय विवरण थप्नुहोस्</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
  </section>
  <section class="content">
      <div class="container-fluid">
        <div class="row">
          
         
          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">परिचय</a></li>
                  <li class="nav-item"><a class="nav-link" href="#aim" data-toggle="tab">उदेश्य</a></li>
                  <li class="nav-item"><a class="nav-link" href="#plan" data-toggle="tab">योजना </a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">कार्य विवरण</a></li>
                  <li class="nav-item"><a class="nav-link" href="#organization" data-toggle="tab">संगठन संरचना</a></li>
                  <li class="nav-item"><a class="nav-link" href="#citizen" data-toggle="tab">नागरिक बडापत्र</a></li>
                  <li class="nav-item"><a class="nav-link" href="#darbandi" data-toggle="tab">कर्मचारी दरबन्दी</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    @include('alert.alert')
                    <form class="form-horizontal" action="{{route('office_detail.update',1)}}" method="post" enctype="multipart/form-data">
                      @csrf
                {{method_field('PUT')}}  
                      <div class="form-group">
                            <label for="introduction">परिचय:</label>
                            <textarea class="textarea" name="introduction" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                          {!!$office_detail->introduction!!}</textarea>
                          </div>
                          <div class="form-group">
                            <label>मिति: *</label>
                          <input type="text" id="nepali-datepicker"  value="{{old('introduction_date')}} "  class="form-control @error('introduction_date') is-invalid @enderror" name="introduction_date" placeholder="Please enter date here." />
                      @error('introduction_date')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                       
                      </form>
                    </div>
                    <div class="tab-pane" id="aim">
                      @include('alert.alert')
                        <form class="form-horizontal" action="{{route('office_detail.update',1)}}" method="post" enctype="multipart/form-data">
                          @csrf
                          {{method_field('PUT')}}    
                          <div class="form-group">
                                <label for="aim">उदेश्य:</label>
                                <textarea class="textarea" name="aim" placeholder="Place some text here"
                                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                  {!!$office_detail->aim!!}</textarea>
                                  </div>
                                  <div class="form-group">
                                    <label>मिति: *</label>
                                  <input type="date" id="nepali-datepicker1"  value="{{old('aim_date')}} "  class="form-control @error('aim_date') is-invalid @enderror" name="aim_date" placeholder="Please enter date here." />
                              @error('aim_date')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                                  </div>
                              <div class="form-group">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                           </form>
                        </div>
                        <div class="tab-pane" id="plan">
                          @include('alert.alert')
                            <form class="form-horizontal" action="{{route('office_detail.update',1)}}" method="post" enctype="multipart/form-data">
                              @csrf
                          {{method_field('PUT')}}     
                              <div class="form-group">
                                    <label for="plan">योजना:</label>
                                    <textarea class="textarea" name="plan"  placeholder="Place some text here"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                      {!!$office_detail->plan!!}</textarea>
                                      </div>
                                      <div class="form-group">
                                        <label>मिति: *</label>
                                      <input type="date" id="nepali-datepicker"  value="{{old('plan_date')}} "  class="form-control @error('plan_date') is-invalid @enderror" name="plan_date" placeholder="Please enter date here." />
                                  @error('aim_date')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                                      </div>
                                  <div class="form-group">
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                               </form>
                            </div>
                <div class="tab-pane" id="timeline">
                  @include('alert.alert')
                    <form class="form-horizontal" action="{{route('office_detail.update',1)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      {{method_field('PUT')}}    
                      <div class="form-group">
                            <label for="work_area">कार्य विवरण:</label>
                            <textarea class="textarea" name="work_area"  placeholder="Place some text here"
                              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                              {!!$office_detail->work_area!!}</textarea>
                              </div>
                              <div class="form-group">
                                <label>मिति: *</label>
                              <input type="date" id="nepali-datepicker"  value="{{old('work_area_date')}} "  class="form-control @error('work_area_date') is-invalid @enderror" name="work_area_date" placeholder="Please enter date here." />
                          @error('work_area_date')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                              </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                       </form>
                    </div>
                <div class="tab-pane" id="organization">
                  @include('alert.alert')
                    <form class="form-horizontal" action="{{route('office_detail.update',1)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      {{method_field('PUT')}}   
                      <div class="form-group">
                          <h5>Existing Background Photo</h5>
                          <img src="{{asset('storage/assets/office/'.$office_detail->organization_structure)}}" alt="organization structure" width="100">
                          <br>    
                            <label for="organization_structure">संगठन संरचनाको फोटो:*</label><br>
                            <input type="file"  name="organization_structure" class="form-control " id="organization_structure" name="organization_structure" value="{{old('organization_structure')}}">
                        @error('organization_structure')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label>मिति: *</label>
                            <input type="date" id="nepali-datepicker"  value="{{old('organization_structure_date')}} "  class="form-control @error('organization_structure_date') is-invalid @enderror" name="organization_structure_date" placeholder="Please enter date here." />
                          @error('organization_structure_date')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                          </div>
                      
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      
                    </form>
                </div>
                  <div class="tab-pane" id="citizen">
                    @include('alert.alert')
                    <form class="form-horizontal" action="{{route('office_detail.update',1)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      {{method_field('PUT')}}    
                      <div class="form-group">
                          <h5>Existing Background Photo</h5>
                          <img src="{{asset('storage/assets/office/'.$office_detail->citizen_charter)}}" alt="Citizen charter" width="100">
                          <br> 
                            <label for="citizen_charter">नागरिक बडापत्रको फोटो:*</label><br>
                            <input type="file"  name="citizen_charter" class="form-control " id="citizen_charter" name="citizen_charter" value="{{old('citizen_charter')}}">
                        @error('citizen_charter')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label>मिति: *</label>
                            <input type="date" id="nepali-datepicker"  value="{{old('citizen_charter_date')}} "  class="form-control @error('citizen_charter_date') is-invalid @enderror" name="citizen_charter_date" placeholder="Please enter date here." />
                            @error('citizen_charter_date')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror  
                          </div>
                      
                        <div class="form-group">
                          <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      </div>
                      <div class="tab-pane" id="organization">
                  @include('alert.alert')
                    <form class="form-horizontal" action="{{route('office_detail.update',1)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      {{method_field('PUT')}}   
                      <div class="form-group">
                          <h5>Existing Background Photo</h5>
                          <img src="{{asset('storage/assets/office/'.$office_detail->organization_structure)}}" alt="organization structure" width="100">
                          <br>    
                            <label for="organization_structure">संगठन संरचनाको फोटो:*</label><br>
                            <input type="file"  name="organization_structure" class="form-control " id="organization_structure" name="organization_structure" value="{{old('organization_structure')}}">
                        @error('organization_structure')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label>मिति: *</label>
                            <input type="date" id="nepali-datepicker"  value="{{old('organization_structure_date')}} "  class="form-control @error('organization_structure_date') is-invalid @enderror" name="organization_structure_date" placeholder="Please enter date here." />
                          @error('organization_structure_date')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                          </div>
                      
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      
                    </form>
                </div>
                <div class="tab-pane" id="darbandi">
                  @include('alert.alert')
                    <form class="form-horizontal" action="{{route('office_detail.update',1)}}" method="post" enctype="multipart/form-data">
                      @csrf
                      {{method_field('PUT')}}   
                      <div class="form-group">
                          <h5>Existing Background Photo</h5>
                          <img src="{{asset('storage/assets/office/'.$office_detail->darbandi_structure)}}" alt="darbandi_structure" width="100">
                          <br>    
                            <label for="darbandi_structure">कर्मचारी दरबन्दीको फोटो:*</label><br>
                            <input type="file"  name="darbandi_structure" class="form-control " id="darbandi_structure" name="darbandi_structure" value="{{old('darbandi_structure')}}">
                        @error('darbandi_structure')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                            <label>मिति: *</label>
                            <input type="date" id="nepali-datepicker"  value="{{old('darbandi_structure_date')}} "  class="form-control @error('darbandi_structure_date') is-invalid @enderror" name="darbandi_structure_date" placeholder="Please enter date here." />
                          @error('darbandi_structure_date')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                          </div>
                      
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Submit</button>
                        </div>
                      
                    </form>
                </div>
                    </form>
                  </div>
                 
                </div>
            
              </div><!-- /.card-body -->
            </div>
           
          </div>
          <!-- /.col -->
        </div>
        
      </div><!-- /.container-fluid -->
    </section>

@endsection
