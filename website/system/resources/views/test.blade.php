@extends('header')
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>
<body>

<div class="container top">
  <div class="row">
      <div class="intro">
        <p>{{__('text.Introduction to the Directorate')}}</p>
        
      </div>
    
<div class="tab">
  <button class="tablinks" onmouseover="openCity(event, 'London')">{{__('text.Introduction')}}</button>
  <button class="tablinks" onmouseover="openCity(event, 'Paris')">{{__('text.Organization structure')}}</button>
  <button class="tablinks" onmouseover="openCity(event, 'Tokyo')">{{__('text.Directors statement')}}</button>
</div>

<div id="London" class="tabcontent">
  <h3>London</h3>
  <p>London is the capital city of England.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Paris</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Tokyo</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>

<div class="clearfix"></div>
</div>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
@endsection
</html> 
