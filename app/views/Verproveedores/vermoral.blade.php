@extends ('templates/plantilla')

	@section('contenido')
		
		@include('templates/menu')

			<div  class="row bajar-60">
				<div class="col-md-1">{{-- columna1 --}}</div>
					<div class="col-md-10">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">Persona Moral </h3>	
							</div>
							<table class="table">
								<tr>
									<th>Nombre Empresa</th>
									<th>Domicilio de la empresa</th>
									<th>Número de acta</th>
									<th>Nombre Representante</th>
									<th>Eliminar</th>
								</tr>
								@foreach ($registros as $registro)
									<tr>
										<td>{{ $registro->nombre_empresa}}</td>
										<td>{{ $registro->domicilio_empresa}}</td>
										<td>{{ $registro->numero_acta}}</td>
										<td>{{ $registro->nombre_representante}}</td>
										<td><a href="/eliminar-moral/{{ $registro->id }}" class="btn btn-success">Eliminar</a></td>
									</tr>
								@endforeach
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-1">{{--columna3--}}</div>
			</div>
@stop