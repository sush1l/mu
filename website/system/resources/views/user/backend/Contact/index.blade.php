@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>सम्पर्क लिस्ट</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('contact.create')}}">सम्पर्क थप्नुहोस्</a></li>
            <li class="breadcrumb-item active">सम्पर्क लिस्ट</li>
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
              <h3 class="card-title">सम्पर्क लिस्ट:</h3>
            </div>
            
            <div class="work-area" style="margin-top: 30px;">
 <table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <td>S no</td>
            <td>Full Name</td>
            <td>Number</td>
            <td></td>
        </tr>
        </thead>
    <tbody>
        @foreach($contact as $contact)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$contact->full_name ?? 'Unknown Contact'}}</td>
                <td>{{$contact->phone}}</td>
                <td>
                    <a href="{{route('contact.edit', $contact)}}">edit</a>
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

@endsection


