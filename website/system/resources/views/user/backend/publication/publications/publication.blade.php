@extends('layouts.header')
@section('content')

<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>  प्रकाशन थप्नुहोस्</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item"><a href="">  प्रकाशन </a></li>
            <li class="breadcrumb-item active">  प्रकाशन थप्नुहोस्</li>
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
            <form role="form" method="POST" action="{{route('publication.store')}}" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
  <div class="form-group">
    <label for="publication_name">शिर्षक *</label>
    <input type="text" name="publication_name" class="form-control" id="publication_name">
   @error('publication_name')
          {{$message}}
          @enderror
  </div>

  

             <div class="form-group">
                  <label for="publication_category_id">वर्ग छान्नुहोस्</label>
                  <select name="publication_category_id" class="form-control">
                    <option value="">--कृपया वर्ग छान्नुहोस्--</option>
                      @foreach ($publication_categories as $publication_category)
                   <option value="{{$publication_category->id}}">{{$publication_category->publication_category_name}}</option>
                       
                   @endforeach
                 </select>
                  @error('publication_category_id')
          {{$message}}
          @enderror
                </div>
       <div class="form-group">
    <label>फाइल *</label>
    <input type="file" name="publication_file" class="form-control" id="publication_file">
    @error('publication_file')
          {{$message}}
          @enderror
  </div>
   
    <div class="form-group">
    <label>प्रकाशित मिति</label>
    <input type="text" name="publication_date" class="form-control" id="nepali-datepicker">
   @error('publication_date')
          {{$message}}
          @enderror
  </div>

<div class="form-check">
                  <label for="status">Status</label><br>
               <input type="radio" id="male" name="status" value="0">
<label for="active">Active</label><br>
<input type="radio" id="inactive" name="status" value="1">
<label for="inactive">Inactive</label><br>            </div>
                </div>
            

  <div class="form-group">
  
    <button type="submit" class="btn btn-primary float-sm-right" name="submit">submit</button>
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