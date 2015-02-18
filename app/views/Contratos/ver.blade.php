@extends ('templates/plantilla')

	@section('contenido')
		
		@include('templates/menu')

			<div  class="row bajar-60">
				<div class="col-md-1">{{-- columna1 --}}</div>
					<div class="col-md-10">
						<div class="panel panel-success">
							<div class="panel-heading">
								<h3 class="panel-title">Contrato persona fisica servicio</h3>	
							</div>

				
							<table class="table">
								<tr>
									<th>No.De Contrato</th>
									<th>Nombre</th>
									<th>Apellido paterno</th>
									<th>Apellido materno</th>
									<th>Contrato</th>

								</tr>
								@foreach ($registros as $registro)
									<tr>
										<td>{{ $registro->no_contrato}}</td> 
										<td>{{ $registro->nombre}}</td> 
										<td>{{ $registro->a_paterno}}</td>
										<td>{{ $registro->a_materno}}</td>
										<td><a href="recuperar-fisica/{{ $registro->id }}" class="btn btn-success">Contrato</a></td>
									</tr>
								@endforeach
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-1">{{--columna3--}}</div>
			</div>
@stop	
</body>
</html>