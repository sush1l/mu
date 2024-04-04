@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>लिंक थप्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">लिंक थप्नुहोस्</li>
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
            
            <form role="form" Action="{{route('link.store')}} " method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                @include('alert.alert')
                <div class="form-group">
                    <label for="link_name">लिंकको शिर्षक:*</label>
                    <input type="text" class="form-control" id="link_name" name="link_name" placeholder="Enter link Title ">
                    @error('link_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="form-group">
                    <label for="url">लिंक Url:*</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="Enter link url ">
                    @error('url')
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
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">लिंक लिस्ट</h3>
            </div>
            
            <div class="work-area" style="margin-top: 30px;">
 <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                          <th>क्र.म:</th>
                          <th>लिंक शिर्षक:</th>
                          <th>लिंक(url):</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                          @foreach ($links as $link)
                          <tr>       
                             <td>{{$loop->iteration}}</td>
                             <td>{{$link->link_name}} </td>
                             <td>{{$link->url}} </td>
                           <td>
                            &nbsp;<a href="{{route('link.edit',$link->id)}}"><button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button></a>
                      <form class="float-left" action="{{route('link.destroy',$link)}}" method="Post">
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

@endsection
