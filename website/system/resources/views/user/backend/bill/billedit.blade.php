@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>बिल सार्बजनिकरण थप्नुहोस</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">बिल सार्बजनिकरण थप्नुहोस</li>
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
            <form role="form" Action="{{route('bill.update',$bill)}} " method="post" enctype="multipart/form-data">
              @include('alert.alert')
              @csrf
              {{method_field('PUT')}}
              <div class="card-body">
                <div class="form-group">
                    <label for="description">विवरण:*</label>
                    <textarea class="text" name="description" placeholder="Place some text here"
                    {{$bill->description}} style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    
                              @error('description')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                  <div class="form-group">
                    <label for="budget_no">बजेट नं.:</label>
                    <input type="text" class="form-control" id="budget_no"  name="budget_no" value="{{$bill->budget_no}}" placeholder="Enter budget number.. ">
                    @error('budget_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="expense_head">खर्च शिर्षक:</label>
                    <input type="text" class="form-control" id="expense_head" name="expense_head" value="{{$bill->expense_head}}" placeholder="Enter credit title.. ">
                    @error('expense_head')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="buying_process">खरिद प्रक्रिया:</label>
                    <input type="text" class="form-control" id="buying_process" name="buying_process" value="{{$bill->buying_process}}" placeholder="Enter buy method.. ">
                    @error('buying_process')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="pan_no">पान न.:</label>
                    <input type="text" class="form-control" id="pan_no" name="pan_no" value="{{$bill->pan_no}}" placeholder="Enter pan number.. ">
                    @error('pan_no')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="bill">बिल फोटो: *</label><br>
                    <input type="file" name="bill" class="form-control @error('bill') is-invalid @enderror">
                  @error('bill')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
                </div>
                  <div class="form-group">
                    <label for="bill_date">रसिद मिति: *</label>
                    <input type="text" id="nepali-datepicker"  value="" name="bill_date"  name="bill_date" class="form-control " value="{{$bill->bill_date}}" placeholder="Please invoice date here." />
                    @error('bill_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                <div class="form-group">
                    <label for="cash">रकम:</label>
                    <input type="text" class="form-control" id="cash" name="cash" value="{{$bill->cash}}" placeholder="Enter cash amount.. ">
                    @error('cash')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="remarks">कैफियत:</label>
                    <input type="text" class="form-control" id="remarks" value="{{$bill->remarks}}" name="remarks">
                    @error('remarks')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  
                  <div class="form-group">
                    <label for="post_date">अपलोड मिति: *</label>
                    <input type="date" id="post_date"  value="" name="post_date" value="{{$bill->post_date}}" class="form-control "  />
                    @error('post_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label>Status</label><br>
                    <input type="radio" name="status"  value="1" checked="checked">&nbsp;Active &nbsp;&nbsp;
                    <input type="radio" name="status"  value="0">&nbsp;Inactive 
                    @error('status')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
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
