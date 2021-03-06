@extends ('templates/plantilla')

	@section('contenido')
		
		@include('templates/menu')

			<div  class="row bajar-60">
				<div class="col-md-1">{{-- columna1 --}}</div>
					<div class="col-md-10">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">Persona Fisica</h3>	
							</div>
							<table class="table">
								<tr>
									<th>Nombre</th>
									<th>Apellido paterno</th>
									<th>Apellido materno</th>
									<th>RFC</th>
									<th>Eliminar</th>

								</tr>
								@foreach ($registros as $registro)
									<tr>
										<td>{{ $registro->nombre}}</td> 
										<td>{{ $registro->a_paterno}}</td>
										<td>{{ $registro->a_materno}}</td>
										<td>{{ $registro->rfc}}</td>
										<td><a href="/eliminar-fisica/{{ $registro->id }}" class="btn btn-success">Eliminar</a></td>
									</tr>
								@endforeach
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-1">{{--columna3--}}</div>
			</div>
@stop