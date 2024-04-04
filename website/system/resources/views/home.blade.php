@extends('layouts.header')
@section('header')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/home">गृहपृष्ठ</a></li>
          <li class="breadcrumb-item active">Dashboard </li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
    
@endsection
@section('content')
     
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{$employees}}</h3>
  
                  <p>जम्मा कर्मचारीहरु</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add" style="color: #fff;"></i>
                </div>
                
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{$notice}}</h3>
  
                  <p>जम्मा सुचनाहरु</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars" style="color: #fff;"></i>
                </div>
                
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3 style="color: #fff;">{{$download}}</h3>
  
                  <p style="color: #fff;">जम्मा डाउनलोड</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag" style="color: #fff;"></i>
                </div>
                
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{$photo_album}}</h3>
  
                  <p>जम्मा फोटोहरु</p>
                </div>
                <div class="icon">
                  <i class="ion-android-image" style="margin: -10px; color:#fff;"></i>
                </div>
                
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{$dastabejs}}</h3>
  
                  <p>जम्मा कानुनी दस्तावेज</p>
                </div>
                <div class="icon">
                  <i class="ion-android-apps" style="margin: -10px; color:#fff;"></i>
                </div>
                
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3 style="color: #fff;">{{$publications}}</h3>
  
                  <p style="color: #fff;">जम्मा प्रकाशनहरु</p>
                </div>
                <div class="icon">
                  <i class="ion-android-drafts" style="margin: -10px; color:#fff;"></i>
                </div>
                
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{$sliders}}</h3>
  
                  <p>जम्मा स्लाइडर</p>
                </div>
                <div class="icon">
                  <i class="ion-levels" style="margin: -10px; color:#fff;"></i>
                </div>
                
              </div>
            </div>
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{$bill}}</h3>
  
                  <p>जम्मा बिल</p>
                </div>
                <div class="icon">
                  <i class="ion-arrow-graph-up-right" style="margin: -10px; color:#fff;"></i>
                </div>
                
              </div>
            </div>
            <!-- ./col -->
          </div>
          
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <!-- Start of nepali patro badge -->
<script type="text/javascript"> 
  var nc_cb_width = 610;
  var nc_cb_height = 300;
  var nc_cb_shadow = 'true';
  var nc_cb_api_id = 84120200910258; //-->
  </script>
  <script type="text/javascript" src="https://www.ashesh.com.np/nepali-calendar/widget/cb.js"></script><div id="ncwidgetlink">© <a href="https://www.ashesh.com.np/nepali-calendar/" id="nclink" title="Nepali calendar" target="_blank">nepali calendar</a></div>
  <!-- End of nepali patro badge -->
              </div>
              
            
              
              
            </section>
           
            <section class="col-lg-5 connectedSortable">
  
              <!-- Map card -->
              <div class="card bg-gradient-primary">
                <iframe src="https://www.ashesh.com.np/linkdate-converter.php?h_color=21ADE2&b_color=CFE4B1&api=011199k270" frameborder="0" scrolling="no" marginwidth="0" marginheight="0" style="border:none; overflow:hidden; width:100%; height:280px;" allowtransparency="true"></iframe><br><span style="color:#6D6D6D; font-size:8px; text-align:left">Powered by © <a href="https://www.ashesh.com.np/nepali-date-converter.php" title="Nepali date converter" target="_top" style="text-decoration:none; color:#6D6D6D;">nepali date converter</a></span>
                
                
                
              </div>
              
              
            </section>
            
            
          </div>
         
        </div>
      </section>
      
@endsection