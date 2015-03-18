@extends ('templates/plantilla')

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
					<h3 class="panel-title">Persona fisica </h3>	
				</div>
				<div class="panel-body">
					<form method="post" action="{{url('/guardar_fisica')}}" role="form">
						<div class="row">
							<div class="col-md-4">
								<label for="nombre">*Nombre:</label>
								<input type="text" class="form-control" placeholder="Ingresa el Nombre" name="nombre" />
							</div>
							<div class="col-md-4">
								<label for="a_paterno">*Apellido Paterno:</label>
								<input type="text" class="form-control" placeholder="Ingresa el Apellido paterno" name="a_paterno" />
							</div>
								<div class="col-md-4">
									<label for="a_materno">*Apellido Materno:</label>
									<input type="text" class="form-control" placeholder="Ingresa el Apellido materno" name="a_materno" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label for="rfc">*RFC:</label>
									<input type="text" class="form-control" placeholder="Ingresa el RFC" name="rfc" />
								</div>
								<div class="col-md-4">
									<label for="domiciliorfc">*Domicilio RFC:</label>
									<input type="text" class="form-control" placeholder="Ingresa el domicilio del RFC" name="domiciliorfc" />
								</div>
								<div class="col-md-4">
									<label for="folioife">*No. Folio de IFE:</label>
									<input type="text" class="form-control" placeholder="Ingresa No. de folio" name="folioife" />
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<label for="domicilioife">*Domicilio de IFE:</label>
									<input type="text" class="form-control" placeholder="Ingresa domicilicio de IFE" name="domicilioife" />
								</div>
								<div class="col-md-4">
										<label for="claveife">*Clave de elector IFE:</label>
										<input type="text" class="form-control" placeholder="Ingresa clave de elector IFE" name="claveife" />
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