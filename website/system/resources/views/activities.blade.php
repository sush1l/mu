@extends('header')
@section('content')
<div class="container top">
  <div class="row">
      <div class="intro">
        <p>{{__('text.Educational activities')}}</p>
        
      </div>
	  <div class="activities" style="width: 100%;">
		<table _ngcontent-oit-c76="" id="example" class="table table-bordered table-condensed table-responsive table-hover">
        
			<thead _ngcontent-oit-c76="">
			  
			  <tr _ngcontent-oit-c76="" class="success">
				<th _ngcontent-oit-c76="" width="7%">क्र.सं</th>
				<th _ngcontent-oit-c76="" width="50%">शीर्षक</th>
				<th _ngcontent-oit-c76="" width="15%">समुह</th>
				<th _ngcontent-oit-c76="" width="15%">प्रकाशित मिति</th>
				<th _ngcontent-oit-c76="" width="13%"></th>
			  </tr></thead>
			  <tbody _ngcontent-oit-c76="">
				@foreach($publication as $publication)
				<tr _ngcontent-oit-c76="" class="ng-star-inserted">
				  
				  <td _ngcontent-oit-c76=""> {{$loop -> iteration}}</td>
				  <td _ngcontent-oit-c76="">{{$publication -> publication_name}}</td>
				  <td _ngcontent-oit-c76="">{{$publication->publication_category->publication_category_name}}</td>
				  <td _ngcontent-oit-c76=""><small _ngcontent-oit-c76=""><i _ngcontent-oit-c76="">{{$publication -> publication_date}}</i></small></td>
					<td _ngcontent-oit-c76=""><a _ngcontent-oit-c76="" class="btn btn-sm btn-primary" href="{{asset('storage/assets/publication/'.$publication->publication_file)}}"><i _ngcontent-oit-c76="" class="fa fa-eye"></i> View</a></td></tr>
	
					  
					  
					@endforeach</tbody></table>
     
  </div>
</div>
</div>
  
@endsection