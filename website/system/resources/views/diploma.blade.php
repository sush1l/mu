@extends('header')
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  background-color: #eee;
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}
ul.breadcrumb li+li:before {
  padding: 8px;
  color: black;
  content: "/\00a0";
}
ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
  font-weight: 10px;
}
ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}
</style>
<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
<ul class="breadcrumb">
  <li><a href="/"><i class="fa fa-home"></i></a></li>
  <li><a href="#">Diploma Course</a></li>
</ul>
   </div>
     </div>
</div>
    </div>

<div class="container-fluid">
  <div class="col-md-12">
  <div class="row" style="padding: 5px;">
   <div class="col-md-12">
    <div class="well-heading" style="border-left: 10px solid #b31b1b; position: relative;">

    <i class="fa fa-spinner fa-pulse" ></i>Diploma Course<h6 class="content_title">  <span class="pull-right"></span>

</div>
<p>The Ministry of Education (MoE) was established in 1951 and was renamed as the Ministry of Education and Sports (MoES) in 2002. It was again renamed as Ministry of Education with the decision of Cabinet in 15 Bhadra 2065 BS. The MoE as the apex body of all educational organizations is responsible for overall development of education in the country. This Ministry is responsible for formulating educational policies and plans and managing and implementing them across the country through the institutions under it. The Central Level Agencies (CLAs) under the Ministry are responsible for designing and implementing of programmes and monitoring them. Five Regional Education Directorates (REDs) are responsible for monitoring the programmes undertaken by the district level organizations. Seventy-five District Education Offices (DEOs) and One Thousand Ninety-one Resource Centres (RCs) at local level are mainly the implementing agencies of the educational policies, plans and programmes. Moreover, all the functional units of the MoE and other constituent and autonomous bodies within the framework of the Ministry are parts of the organizational structure geared for achieving its goals and carry out its functions.

</p>
   </div>
   
     </div>
</div>
 

    </div>


@endsection

