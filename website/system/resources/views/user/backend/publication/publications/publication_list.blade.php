@extends('layouts.header')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> प्रकाशन  लिस्ट</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item"><a href=""> प्रकाशन </a></li>
            <li class="breadcrumb-item active"> प्रकाशन लिस्ट</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
            @include('alerts.alert')

<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-disable">
            <div class="card-header">
	<table id="myTable" class="display" style="width: 100%;">
    <thead>
        <tr>
            <th>S.N</th>
            <th>शिर्षक</th>
             <th>फाइल</th>
             <th>प्रकाशक</th>
            <th>प्रकाशित मिति </th>
            <th>प्रकाशक विवरण</th>
            <th>वर्ग</th>
           <th>स्टेटस</th>
            <th>Action</th>
            

        </tr>
    </thead>
    <tbody>
      @foreach($publications as $publication)
        <tr>
            <td>{{$loop -> iteration}}</td>
            <td>{{$publication -> publication_name}}</td>
             <td><a href="{{asset('storage/assets/publication/'.$publication->publication_file)}}">click here to download</a></td>
              <td>{{$publication -> publication_publisher}}</td>
              <td>{{$publication -> publication_date}}</td>
              <td>{{$publication -> publication_description}}</td>
                <td>{{$publication->publication_category->publication_category_name}}</td>
                   <td> @if($publication ->  status==0)
                    <button class="btn btn-success btn-sm">Active</button>
                    @else
               <button class="btn btn-danger btn-sm">Inactive</button>

                   @endif
                 </td>

           <td> <a href="{{route('publication.edit',$publication->id)}}">
                <button class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-edit"></i></button></a>
                
            <form  class="float-left" action="{{route('publication.destroy',$publication)}}" method="POST">
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