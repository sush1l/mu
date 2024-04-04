@extends('header')
@section('content')


<div class="container-fluid">
  <div class="col-md-12">
  @foreach($office_Detail as $office_Detail)
  <div class="row" style="padding: 5px;">
    <br>
    <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">

       {{__('Contact Us')}}<h6 class="content_title">  <span class="pull-right"></span>
  
  </div>
  <div class="container-fluid">
  <div class="col-md-12">
 
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
    <div class="address top" style="text-align: center;">
      <h4 style="text-align: center; font-size:20px; font-weight:bold; color:red;">{{__('Contact address')}}</h4>
    </div>
    <div class="address_content top border" style="text-align: center; ">
    <div class="address_detail top">
      <h6 style="font-size:16px; color:red; font-weight:bold;">{{$header->ministry}}</h6>
      <h6 style="font-size:16px; color:red; font-weight:bold;">{{$header->address}}</h6>
      <h6 style="font-size:16px; color:red; font-weight:bold;" >{{__('text.Telephone')}}: {{$header->phone}}</h6>
      <h6 style="font-size:16px; color:red; font-weight:bold;">{{__('text.Email')}}: {{$header->email}}</h6>
      <h6 style="font-size:16px; color:red; font-weight:bold;">{{__('text.website')}}: {{$header->instagram}}</h6>
      
    
    
      
      
    </div>
   </div>
  </div>
</div>

<div class="container-fluid">
  <div class="col-md-12">
 
  <div class="row" style="padding: 5px;">
    <div class="col-md-12" >
      <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="509" id="gmap_canvas" src="https://maps.google.com/maps?q=rukum&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br><style>.mapouter{position:relative;text-align:right;height:509px;width:100%;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:509px;width:100%;}</style></div></div>
  </div>
   </div>
  </div>
</div>
<div class="container-fluid">
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-user">
        <div class="card-header">
          <h3 class="card-title">Contact Us</h3>
        </div>
       <div class="card-body">
          @if(Session::has('success'))
             <div class="alert alert-success">
             {{ Session::get('success') }}
              </div>
          @endif
          
         <form method="post" action="contact-us">
            {{csrf_field()}}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label> Name </label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name">
                  @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
            <div class="col-md-12">
              <div class="form-group">
                  <label> Email </label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>   
            <div class="col-md-12">
               <div class="form-group">
                  <label> Phone Number </label>
                  <input type="text" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Phone Number" name="phone_number">
                  @error('phone_number')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
             <div class="col-md-12">
                <div class="form-group">
                  <label> Subject </label>
                  <input type="text" class="form-control @error('subject') is-invalid @enderror" placeholder="Subject" name="subject">
                  @error('subject')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
             <div class="col-md-12">
               <div class="form-group">
                  <label> Message </label>
                  <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
                  @error('message')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label> Date </label>
                  <input type="text" id="nepali-datepicker" class="form-control @error('date') is-invalid @enderror" placeholder="Date" name="date">
                  @error('date')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
              </div>
            </div>
            <div class="row">
             <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-primary btn-round">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<style>
  label{
    font-size: 14px;
  }
</style>
    @endforeach
</div>
  </div>
  </div>
      @endsection