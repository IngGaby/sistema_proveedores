@extends('templates/plantilla')

@section('contenido')
	
	@include('templates/menu')
	@include('templates/correcto')
	@include('templates/error')
	@include('templates/errores')

	<div  class="row bajar-60">
		<div class="col-md-1">{{-- columna1 --}}</div>
		<div class="col-md-10">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Persona moral </h3>	
				</div>
				<div class="panel-body">
					<form method="post" action="{{url('/guardar_moral')}}" role="form">
						<div class="row">
							<div class="col-md-4">
								<label for="nombreempresa">*Nombre de la empresa:</label>
								<input type="text" class="form-control" placeholder="Ingresa el Nombre de la empresa" name="nombreempresa" />
							</div>
							<div class="col-md-4">
								<label for="domicilioempresa">*Domicilio de la empresa:</label>
								<input type="text" class="form-control" placeholder="Ingresa el domicilio de la empres" name="domicilioempresa" />
							</div>
								<div class="col-md-4">
									<label for="numeroacta">*Número de acta constitutiva:</label>
									<input type="text" class="form-control" placeholder="Ingresa  número de acta constitutiva" name="numeroacta" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label for="numeronotario">*Número de notario:</label>
									<input type="text" class="form-control" placeholder="Ingresa número de notario" name="numeronotario" />
								</div>
								<div class="col-md-4">
									<label for="localidadnotario">*Localidad del  notario:</label>
									<input type="text" class="form-control" placeholder="Ingresa la localidad del notario" name="localidadnotario" />
								</div>
								<div class="col-md-4">
									<label for="nombrenotario">*Nombre del notario:</label>
									<input type="text" class="form-control" placeholder="Ingresa el nombre del notario" name="nombrenotario" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label for="a_paternonotario">*Apellido paterno del notario:</label>
									<input type="text" class="form-control" placeholder="Ingresa apellido paterno del notario" name="a_paternonotario" />
								</div>
								<div class="col-md-4">
										<label for="a_maternonotario">*Apellido materno del notario:</label>
										<input type="text" class="form-control" placeholder="Ingresa el apellido materno del notario" name="a_maternonotario" />
								</div>
								<div class="col-md-4">
									<label for="nombrerepresentante">*Nombre del representante:</label>
									<input type="text" class="form-control" placeholder="Ingresa el nombre del representante" name="nombrerepresentante" />
								</div>
							</div>
							<div class="row">
									<div class="col-md-4">
										<label for="a_paternorepresentante">*Apellido paterno del representante:</label>
										<input type="text" class="form-control" placeholder="Ingresa apellidopaterno del representante" name="a_paternorepresentante" />
									</div>
									<div class="col-md-4">
											<label for="a_maternorepresentante">*Apellido materno del representante:</label>
											<input type="text" class="form-control" placeholder="Ingresa el apellido materno del representante" name="a_maternorepresentante" />
									</div>
									<div class="col-md-4"></div>
							</div>
							<div class="form-group"><br>
								<input type="submit" class="btn btn-success" value="Guardar" />
							</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-1">{{--columna3--}}</div>
	</div>
		
	
@stop