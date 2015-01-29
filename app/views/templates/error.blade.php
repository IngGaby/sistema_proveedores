@if(Session::get('mensaje'))
	<div class="alert alert-danger alert-dismissable text-center">
    	<button type="button" class="close" data-dismiss="alert">&times;</button>
    	<strong>{{ Session::get('mensaje') }}</strong>
	</div>
@endif