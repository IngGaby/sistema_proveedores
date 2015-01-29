@extends('templates/plantilla')

@section('contenido')
  @include('templates/menu')
	<div  class="row bajar-60">
		<div class="col-md-2">{{-- columna1 --}}</div>
		<div class="col-md-8">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Bienvenido al sistema</h3>	
				</div>
				<div class="panel-body">
					<form method="post" action="{{url('/validar')}}" role="form">
						{{Session::get('nombre')}}
					</form>						
		</div>
		<div class="col-md-2">{{--columna3--}}</div>
	</div>
@stop