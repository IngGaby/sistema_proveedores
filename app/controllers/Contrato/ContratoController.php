 <?php

class Contrato_ContratoController extends BaseController{

 	public function contratoInicio(){
		return View::make('Contrato/contrato');	
	}

	public function guardarContrato()
	{
		
		$no_contrato = Input::get('no_contrato');
		$fecha_contrato = Input::get('fecha_contrato');
		$vigencia_contrato = Input::get('vigencia_contrato');
		$tipo_contrato = Input::get('tipo_contrato');
		$producto_servicio = Input::get('producto_servicio');
		$cantidad = Input::get('cantidad');
		

		$contratos = new Contratos;
		$contratos->no_contrato = $no_contrato;
		$contratos->fecha_contrato = $fecha_contrato;
		$contratos->vigencia_contrato= $vigencia_contrato;
		$contratos->vigencia_contrato= $vigencia_contrato;
		$contratos->tipo_contrato = $tipo_contrato;
		$contratos->producto_servicio = $producto_servicio;
		$contratos->cantidad= $cantidad;
		$contratos -> save();

		return Redirect::to('/contrato');
	}
		

}
