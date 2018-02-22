@if(Session::has('info'))

	<div class="alert alert-info col-md-8"  >
		
		<button type="" class="close"  data-dismiss="alert">
			&times;
		</button>
		{{ Session::get('info')}}
	</div>

@endif