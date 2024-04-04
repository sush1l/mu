@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>सूचना/ समाचार सम्पादन गर्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">सूचना/ समाचार सम्पादन गर्नुहोस्</li>
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
            <form role="form" Action="{{route('notice.update',$notice)}} " method="post" enctype="multipart/form-data" >
              @include('alert.alert')
              @csrf
              {{method_field('PUT')}}
              <div class="card-body">
                <div class="form-group">
                    <label for="notice_name">शिर्षक:*</label>
                    <input type="notice_name" class="form-control" id="notice_name" name="notice_name" value="{{$notice->notice_name}}" placeholder="Enter Title ">
                    @error('notice_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="notice_description">विवरण:*</label>
                    <textarea class="textarea" placeholder="Place some text here" name="notice_description" id="notice_description"
                    value="{{$notice->notice_description}}"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                               </textarea>
                              @error('notice_description')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                            </div>
                  
                  <div class="form-group">
                    <label for="notice_category_id">वर्ग: *</label>
                    <select class="form-control" name="notice_category_id" >
                      <option value="">कृपया वर्ग छान्नुहोस्</option>
                      @foreach ($notice_categories as $notice_category)
                          <option value="{{$notice_category->id}}">{{$notice_category->notice_category_name}} </option>
                      @endforeach
                     </select>
                    @error('notice_category_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label>फईल:*</label>
                    <input type="file" name="notice_file" value="{{$notice->notice_file}}" class="form-control @error('notice_file') is-invalid @enderror">
                    @error('notice_file')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  
                  <div class="form-group">
                    <label>मिति: *</label>
                    <input type="text" id="nepali-datepicker"  value="{{$notice->notice_date}}"  class="form-control @error('notice_date') is-invalid @enderror" name="notice_date" placeholder="Please enter date here." />
                    @error('notice_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
              
                  <div class="form-group">
                    <label>प्रकाशक:</label>
                    <input type="text" name="notice_publisher" value="{{$notice->notice_publisher}}" class="form-control">
                    @error('notice_publisher')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label>Status</label><br>
                    <input name="status" type="radio" id="status" value="0" checked="checked"/>
    <label for="status">Active</label>
    <input name="status" type="radio" id="status1" value="1"/>
    <label for="status1">Inactive</label>
    <br>
    @error('status')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label>Mark as New</label><br>
                    <input name="mark_as_new" type="radio" id="mark_as_new" value="0" checked="checked"/>
    <label for="mark_as_new">Mark as New</label>
    <input name="mark_as_new" type="radio" id="mark_as_new1" value="1"/>
    <label for="mark_as_new1">Unmark</label>
    <br>
    @error('mark_as_new1')
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
