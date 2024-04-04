@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>स्लाइडर थप्नुहोस्:</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">स्लाइडर थप्नुहोस्</li>
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
            <form role="form" Action="{{route('slider.store')}} " method="post" enctype="multipart/form-data" >
            @include('alert.alert')
              @csrf
              <div class="card-body">
                <div class="form-group">
                    <label for="title">स्लाइडरको शिर्षक: *</label>
                    <input type="text" name="title" value="{{old('title')}} " class="form-control @error('title') is-invalid @enderror">
                      @error('title')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  </div>
                  <div class="form-group">
                        <label for="photo">स्लाइडरको फोटो: *</label><br>
                        <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror">
                      @error('photo')
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
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">स्लाइडर लिस्ट</h3>
            </div>
            
            <div class="work-area" style="margin-top: 30px;">
 <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Title</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                        
                    
                      @foreach ($sliders as $slider)
                      <tr>       
                         <td>{{$loop->iteration}}</td>
                         <td>{{$slider->title}} </td>
                         <td> @if ($slider->photo=="")
                             No photo file inserted
                             @else
                             <img src="{{asset('storage/assets/slider/'.$slider->photo)}}" width="100" alt="{{$slider->title}}"></td>
                         @endif
                      <td>
                        &nbsp;	&nbsp;<a href="{{route('slider.edit',$slider->id)}}"><button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button></a>
                  
                       <form class="float-left" action="{{route('slider.destroy',$slider)}}" method="Post">
                    
                    @csrf
                {{method_field('DELETE')}}
                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure want to delete this item?');"><i class="fa fa-trash"></i></button>
                       
                  </form>
                </td> 
                    </tr>
                   @endforeach         
                 
                          </tbody>
                    </table>
                
                </div>
          </div>
         </div>
        </div>
     </div>
  </section>
    <!-- /.content -->
  </div>

@endsection
