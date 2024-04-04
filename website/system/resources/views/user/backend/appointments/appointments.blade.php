@extends('layouts.header')
@section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>नियुक्ति लिस्ट:</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">गृहपृष्ठ</a></li>
            <li class="breadcrumb-item active">नियुक्ति लिस्ट:</li>
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
              <h3 class="card-title">नियुक्ति लिस्ट:</h3>
            </div>
            
            <div class="work-area" style="margin-top: 30px;">
 <table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>क्र.सं.:</th>
            <th>नाम:</th>
            <th>फोन नं.:</th>
            <th>ठेगाना:</th>
             <th>बिषय:</th>   
            <th>संदेश:</th>
            <th>Action</th>
           
        </tr>
    </thead>
                        
                        <tbody>
                        
                    <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                
                           </tr>
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
