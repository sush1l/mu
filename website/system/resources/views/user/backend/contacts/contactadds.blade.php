@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>प्रतिक्रिया लिस्ट</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">प्रतिक्रिया लिस्ट</li>
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
              <h3 class="card-title">प्रतिक्रिया लिस्ट:</h3>
            </div>
            
            <div class="work-area" style="margin-top: 30px;">
 <table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>क्र.सं.:</th>
            <th>नाम:</th>
            <th>ईमेल:</th>
            <th>फोन नम्बर:</th>
             <th>Subject:</th>   
           <th>Message:</th>
           
        </tr>
    </thead>
                        
                        <tbody>
                          @foreach ($contact as $Contact)
                    <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$Contact->name}}</td>
                                <td>{{$Contact->email}}</td>
                                <td>{{$Contact->phone_number}}</td>
                                <td>{{$Contact->subject}}</td>
                                <td>{{$Contact->message}}</td>
                               
                                
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
