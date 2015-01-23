@extends ('templates/plantilla')

@section('contenido')
	
	@include('templates/menu')

		<div  class="row bajar-60">
		<div class="col-md-1">{{-- columna1 --}}</div>
		<div class="col-md-10">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title">Generación de contrato</h3>	
				</div>
				<div class="panel-body">
					<form method="post" action="{{url('/guardar_contrato')}}" role="form">
						<div class="row">
							<div class="col-md-4">
								<label for="no_contrato">No.De contrato:</label>
								<input type="text" class="form-control" placeholder="Ingresa el número de contrato" name="no_contrato" />
							</div>
							<div class="col-md-4">
								<label for="fecha_contrato">Fecha de contrato:</label>
								<input type="idate" class="form-control" placeholder="Ingresa fecha" name="fecha_contrato" />
							</div>
							<div class="col-md-4">
									<label for="vigenciacontrato">Vigencia de contrato</label>
									<input type="text" class="form-control" placeholder="Ingresa vigencia de contrato" name="vigencia_contrato" />
								</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<label for="tipocontrato">Tipo de contrato:</label>
								  <select class="form-control" name="tipo_contrato">
									  <option value="">Seleccionar opcion</option>
									  <option value="bien" >Bien</option>
									  <option value="servicio">Servicio</option>
								</select>
							</div>
							<div class="col-md-4">
								<label for="producto">Producto o Servicio:</label>
								<input type="text" class="form-control" placeholder="Ingresa el producto o servicio" name="producto_servicio" />
							</div>
							<div class="col-md-4">
								<label for="cantidad">Cantidad:</label>
								<input type="text" class="form-control" placeholder="Ingresa cantidad" name="cantidad" />
							</div>
							
						</div>								
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-4"></div>
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