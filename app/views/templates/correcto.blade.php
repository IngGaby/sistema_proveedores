@if(Session::get('correcto'))
	<div class="alert alert-success alert-dismissable text-center">
    	<button type="button" class="close" data-dismiss="alert">&times;</button>
    	<strong>¡Correcto!&nbsp;</strong>{{ Session::get('correcto') }}
	</div>
@endif