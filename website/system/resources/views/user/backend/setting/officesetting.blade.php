@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>कार्यालय सेटिंग</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">कार्यालय सेटिंग</li>
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
            <form role="form" action="{{route('setting.update',1)}}" method="post" enctype="multipart/form-data">
              <div class="card-body">
                @csrf
                {{method_field('PUT')}}
                <div class="form-group">
                    <label for="government">निर्देशनालय:*</label>
                    <input type="government" class="form-control" id="government" name="government" value="{{$header->government}}" placeholder="Enter governement name ?">
                    @error('government')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="ministry">कार्यालय:*</label>
                    <input type="ministry" class="form-control" id="ministry" name="ministry" value="{{$header->ministry}}" placeholder="Enter ministry name ?">
                    @error('ministry')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="address">कार्यालय ठेगाना:*</label>
                    <input type="address" class="form-control" id="address" name="address" value="{{$header->address}}" placeholder="Enter address name ?">
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <h5>Existing Background Photo</h5>
                    <img src="{{asset('storage/assets/header/'.$header->bg_photo)}}" alt="Ministry Background" width="100">
                    <br>    
                    <label for="bg_photo">Background Photo</label><br>
                        <input type="file"  name="bg_photo" class="form-control " id="bg_photo" name="bg_photo" value="{{$header->bg_photo}}">
                        @error('bg_photo')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                  <div class="form-group">
                  <label for="email">इमेल</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{$header->email}}" placeholder="Enter email">
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="form-group">
                    <label for="phone">फोन नं.*</label>
                    <input type="phone" class="form-control" id="phone" name="phone" value="{{$header->phone}}" placeholder="Enter Phone Number" name="phone">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="twitter_link">Twitter Link</label>
                    <textarea name="twitter_link" id="twitter_link" name="twitter_link" value="{{$header->twitter_link}}" cols="10" rows="5" class="form-control"></textarea>
                    @error('twitter_link')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="map_iframe">Map-iframe</label>
                    <textarea name="map_iframe" id="map_iframe" name="map_iframe" value="{{$header->map_iframe}}" cols="10" rows="5" class="form-control"></textarea>
                    @error('map_iframe')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="facebook_link">Facebook Link</label>
                    <textarea name="facebook_link" id="facebook_link" name="facebook_link" value="{{$header->facebook_link}}" cols="10" rows="5" class="form-control"></textarea>
                    @error('facebook_link')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="twitter" class="form-control" id="twitter"  name="twitter" value="{{$header->twitter}}">
                    @error('twitter')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="facebook" class="form-control" id="facebook" name="facebook" value="{{$header->facebook}}">
                    @error('facebook')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="instagram">Website</label>
                    <input type="instagram" class="form-control" id="instagram"  name="instagram" value="{{$header->instagram}}">
                    @error('instagram')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="youtube">Youtube</label>
                    <input type="youtube" class="form-control" id="youtube"  name="youtube" value="{{$header->youtube}}">
                    @error('youtube')
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
