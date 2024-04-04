@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4>सूचना/ समाचार/ प्रेस विज्ञप्ती लिस्ट:</h4>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">सूचना/ समाचार/प्रेस विज्ञप्ती लिस्ट</li>
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
              <h3 class="card-title">सूचना/ समाचार लिस्ट</h3>
            </div>
            
            <div class="work-area" style="margin-top: 30px;">
 <table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>क़.स.:</th>
            <th>शिर्षक:</th>
            <th>फईल:</th>
            <th>विवरण:</th>
            <th>समुह:</th>
             <th>प्रकाशित मिति:</th>   
            <th>प्रकाशक:</th>
            <th>स्टाटस:</th>
            <th>Action</th>
           
        </tr>
    </thead>
                        
                        <tbody>
                        
                          @foreach ($notice as $notice)
                          <tr>       
                             <td>{{$loop->iteration}}</td>
                             <td>{{$notice->notice_name}} </td>
                             <td> @if ($notice->notice_file=="")
                                 No photo file inserted
                                 @else
                                 <img src="{{asset('storage/assets/notice/'.$notice->notice_file)}}" width="100" alt="{{$notice->notice_name}}"></td>
                             @endif
                          
                            <td>{{$notice->notice_description}} </td>
                            <td>{{$notice->notice_category->notice_category_name}} </td>
                            <td>{{$notice->notice_date}} </td>
                            <td>{{$notice->notice_publisher}} </td>
                            <td> @if ($notice->status == 0)
                              <div class="btn btn-success btn-sm">Active</div>
                          @else
                          <div class="btn btn-danger  btn-sm">Inactive</div>
                          @endif</td>
                            <td>
                              &nbsp;<a href="{{route('notice.edit',$notice->id)}}"><button class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></button></a>
                             <form class="float-left" action="{{route('notice.destroy',$notice)}}" method="Post">
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
