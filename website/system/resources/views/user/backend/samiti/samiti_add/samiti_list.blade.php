@extends('layouts.header')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>स‌ञ्चालक समिति लिस्ट</h1>
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item"><a href="">स‌ञ्चालक समिति </a></li>
            <li class="breadcrumb-item active">  स‌ञ्चालक समिति लिस्ट</li>
          </ol>
        </div>
        <div class="col-sm-6">
          
           <a href="{{route('samiti.create')}}" class="float-sm-right" ><i class="fa fa-user" aria-hidden="true"></i> स‌ञ्चालक समिति थप्नुहोस</a>
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
            <th>नाम</th>
            <th>पद</th>
            <th>फोन न.</th>
            <th>ठेगाना</th>
            <th>position</th>
            <th>स्टेटस</th>
            <th>Action</th>
            

        </tr>
    </thead>
    <tbody>
      @foreach($samitis  as   $samiti)
        <tr>
            <td>{{$loop -> iteration }}</td>
            <td>{{$samiti -> name}}</td>
            <td>{{$samiti -> designation}}</td>
            <td>{{$samiti -> phone}}</td>
            <td>{{$samiti -> address}}</td>
            <td>{{$samiti -> position}}</td>
            <td> @if($samiti ->  status==0)
                    <button class="btn btn-success btn-sm">Active</button>
                    @else
               <button class="btn btn-danger btn-sm">Inactive</button>

                   @endif
                 </td>
           <td>
           <a href="{{route('samiti.edit',$samiti->id)}}">
                <button class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-edit"></i></button></a>
                
            <form  class="float-left" action="{{route('samiti.destroy',$samiti)}}" method="POST">
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