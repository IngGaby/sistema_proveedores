@extends('templates/plantilla')

@section('contenido')
	<div  class="row bajar-60">
		<div class="col-md-4">{{-- columna1 --}}</div>
		<div class="col-md-4">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Ingresa tus datos </h3>	
				</div>
				<div class="panel-body">
					<form method="post" action="{{url('/validar')}}" role="form">
						<div class="form-group">
							<label for="usuario">Usuario:</label>
							<input type="text" class="form-control" placeholder="Introduce usuario" name="usuario" />
						</div>
						<div class="form-group">
							<label for="password">Password:</label>
							<input type="password" class="form-control" placeholder="Introduce password" name="password"/>
						</div>
						<div class="form-group">
							<input type="submit" class="btn btn-success" value="Aceptar" />
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-4">{{--columna3--}}</div>
	</div>
@stop