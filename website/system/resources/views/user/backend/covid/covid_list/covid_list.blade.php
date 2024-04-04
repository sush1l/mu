@extends('layouts.header')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>कोभीड विवरण</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item"><a href="">कोभीड</a></li>
            <li class="breadcrumb-item active">कोभीड विवरण</li>
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
            @include('alerts.alert')
            <form role="form" method="POST" action="#" enctype="multipart/form-data">
               @csrf
              <div class="card-body">
                <fieldset>
                  <legend>आइसोलेसन</legend>

  <div class="form-group">
    <label for="patient_in_isolation">भर्ना *</label>
    <input type="number" name="patient_in_isolation" class="form-control" id="name" min="0">
    
    @error('patient_in_isolation')
          {{$message}}
          @enderror
  </div>
  
  <div class="form-group">
    <label for="patient_discharge">डिस्चार्ज *</label>
    <input type="number" name="patient_in_isolation" class="form-control" id="name" min="0">
    
    @error('patient_in_isolation')
          {{$message}}
          @enderror
  </div>
  <div class="form-group">
    <label for="patient_remainig">बाँकी *</label>
    <input type="number" name="patient_in_isolation" class="form-control" id="name" min="0">
    
    @error('patient_discharge')
          {{$message}}
          @enderror
  </div>
  

  
</fieldset>

<fieldset>
                  <legend>PCR परीक्षण नतिजा</legend>

  <div class="form-group">
    <label for="negative_patient">नेगेटिव *</label>
    <input type="number" name="negative_patient" class="form-control" id="name" min="0">
    
    @error('patient_in_isolation')
          {{$message}}
          @enderror
  </div>
  
  <div class="form-group">
    <label for="positive_patient">पोजेटिव*</label>
    <input type="number" name="positive_patient" class="form-control" id="name" min="0">
    
    @error('patient_in_isolation')
          {{$message}}
          @enderror
  </div>
  <div class="form-group">
    <label for="patient_remainig">कूल *</label>
    <input type="number" name="patient_in_isolation" class="form-control" id="name" min="0">
    
    @error('patient_discharge')
          {{$message}}
          @enderror
  </div>
  

  
</fieldset>
<fieldset>
                  <legend>CoVID-19 अस्पतालमा</legend>

  <div class="form-group">
    <label for="patientin_hospital">भर्ना *</label>
    <input type="number" name="negative_patient" class="form-control" id="name" min="0">
    
    @error('patient_in_isolation')
          {{$message}}
          @enderror
  </div>
  
  <div class="form-group">
    <label for="discharge_from_hospital">डिस्चार्ज *</label>
    <input type="number" name="positive_patient" class="form-control" id="name" min="0">
    
    @error('patient_in_isolation')
          {{$message}}
          @enderror
  </div>
  <div class="form-group">
    <label for="patient_remainig_inhospital">बाँकी *</label>
    <input type="number" name="patient_in_isolation" class="form-control" id="name" min="0">
    
    @error('patient_discharge')
          {{$message}}
          @enderror
  </div>
  

  
</fieldset>
<fieldset>
                  <legend>मिर्तु हुनेको विवरण</legend>

  <div class="form-group">
    <label for="female_death">महिला *</label>
    <input type="number" name="female_death" class="form-control" id="name" min="0">
    
    @error('patient_in_isolation')
          {{$message}}
          @enderror
  </div>
  
  <div class="form-group">
    <label for="male_death">पुरुष *</label>
    <input type="number" name="male_death" class="form-control" id="name" min="0">
    
    @error('patient_in_isolation')
          {{$message}}
          @enderror
  </div>
  <div class="form-group">
    <label for="total">कूल *</label>
    <input type="number" name="total" class="form-control" id="name" min="0">
    
    @error('patient_discharge')
          {{$message}}
          @enderror
  </div>
  

  
</fieldset>


  <div class="form-group">
  
    <input type="submit" name="submit" class="form-control btn btn-primary float-sm-right col-md-2" value="Submit" >
  </div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>


@endsection