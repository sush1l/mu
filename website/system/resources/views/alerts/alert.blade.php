@if(session('status'))

<div class="alert alert-success" role="alert" id="time">
	{{session('status')}}

</div>
@endif
<script type="text/javascript">
	 setTimeout(time, 2000);
</script>