@extends('layouts.header')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>पुर्व कार्यालय प्रमुख लिस्ट</h1>
          <ol class="breadcrumb float-sm-left">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item"><a href="">कर्मचारी विवरण</a></li>
            <li class="breadcrumb-item active">पुर्व कार्यालय प्रमुख लिस्ट</li>
          </ol>
        </div>
        <div class="col-sm-6">
          
           <a href="{{route('ex_employee.create')}}" class="float-sm-right" ><i class="fa fa-user" aria-hidden="true"></i> पुर्व कार्यालय प्रमुख थप्नुहोस</a>
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
             <th>फोटो</th>
            <th>नाम</th>
            <!--<th>समुह</th>-->
            <th>पद</th>
            <!--<th>तह</th>-->
           
            <th>फोन न.</th>
            <th>इमेल</th>
            <th>ठेगाना</th>
            <th>position</th>
            <th>कार्यरत मिति देखि </th>
            <th>हालसम्मको मिति</th>
            <th>स्टेटस</th>
            <th>Action</th>
            

        </tr>
    </thead>
    <tbody>
      @foreach($ex_employees  as   $ex_employee)
        <tr>
            <td>{{$loop -> iteration }}</td>
             <td><img src="{{asset('storage/assets/exemployee/'.$ex_employee->photo)}}" width="80"></td>
            <td>{{$ex_employee -> name}}</td>
            <!--<td>{{$ex_employee -> department}}</td>-->
            <td>{{$ex_employee -> designation}}</td>
           <!-- <td>{{$ex_employee -> level}}</td>-->
            <td>{{$ex_employee -> phone}}</td>
            <td>{{$ex_employee -> email}}</td>
            <td>{{$ex_employee -> address}}</td>
            <td>{{$ex_employee -> position}}</td>
            <td>{{$ex_employee -> date}}</td>
            <td>{{$ex_employee -> lastdate}}</td>
            <td> @if($ex_employee ->  status==0)
                    <button class="btn btn-success btn-sm">Active</button>
                    @else
               <button class="btn btn-danger btn-sm">Inactive</button>

                   @endif
                 </td>
           <td>
           <a href="{{route('ex_employee.edit',$ex_employee->id)}}">
                <button class="btn btn-warning btn-sm float-left" data-toggle="modal" data-target="#confirm-delete"><i class="fa fa-edit"></i></button></a>
                
            <form  class="float-left" action="{{route('ex_employee.destroy',$ex_employee)}}" method="POST">
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