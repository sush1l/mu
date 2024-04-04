@extends('layouts.header')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>कार्यालय  लिस्ट</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item"><a href="">कार्यालय</a></li>
            <li class="breadcrumb-item active">कार्यालय लिस्ट</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
            @include('alert.alert')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-disable">
            <div class="card-header">
                <table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>S.N</th>
            <th>कार्यालय नाम</th>
            <th>फोन</th>
             <th>ईमैल्</th>
             <th>वेवसाईट लिंक</th>
            <th>निर्देशनालयको नाम</th>
           
            <th>Action</th>
            

        </tr>
    </thead>
    <tbody>
      @foreach($sub_ordinate_offices as $sub_ordinate_office)
        <tr>
            <td>{{$loop -> iteration}}</td>
            <td>{{$sub_ordinate_office->sub_ordinate_name}}</td>
             <td>{{$sub_ordinate_office->sub_ordinate_phone}}</td>
              <td>{{$sub_ordinate_office->sub_ordinate_email}}</td>
              <td><a href="{{$sub_ordinate_office->sub_ordinate_website}}">{{$sub_ordinate_office -> sub_ordinate_website}}</a></td>
              <td>{{$sub_ordinate_office ->directorate-> directorate_name}}</td>
                   
           <td>
           <a href="{{route('sub_ordinates.edit',$sub_ordinate_office->id)}}">
                <button class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-edit"></i></button></a>
                
            <form  class="float-left" action="{{route('sub_ordinates.destroy',$sub_ordinate_office->id)}}" method="POST">
              @csrf
              {{method_field('DELETE')}}
            <button class="btn btn-danger btn-sm"  onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash"></i></button>
          </form>
               </td>


        </tr>
         @endforeach
    </tbody>
</table>
</form>
</div>
</div>
</div>
</div>
</div>
</section>


@endsection