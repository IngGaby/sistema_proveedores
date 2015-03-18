 <?php

class Contrato_ContratoController extends BaseController{

 	public function contratoInicio(){
        $datos['registros'] = Fisicas::all();
		return View::make('Contrato/contrato',$datos);
	}

	public function guardarContrato()
	{
		
		$data = Input::all();

		$reglas =  [
			'no_contrato'		=> 'required',
			'fecha_contrato'	=> 'required',
			'vigencia_contrato'	=> 'required',
			'tipo_contrato'		=> 'required',
			'producto_servicio'	=> 'required',
			'cantidad'			=> 'required',
			'monto_total'		=> 'required',
            'proveedor'         => 'required'
		];

		$messages = [
			'no_contrato.required'	  	  => 'El No de contrato es un campo requerido',
			'no_contrato.alpha_num'	  	  => 'El No de contrato debe ser alpha_num',
			'no_contrato.numeric'	  	  => 'El No de contrato debe ser númerico',
			'fecha_contrato.required' 	  => 'La fecha de contrato es un campo requerido',
			'vigencia_contrato.required'  => 'La vigencia del contrato es un campo requerido',
			'tipo_contrato.required'	  => 'El tipo de contrato  es un campo requerido',
			'producto_servicio.required'  => 'El producto o servicio es un campo obligatorio',
			'cantidad.required'			  => 'La cantidad es un campo requerido',
			'monto_total.required'		  => 'El monto total es requerido',
            'proveedor.required'          => 'El proveedor es un campo requerido'
		];
		
		$validator = Validator::make($data, $reglas, $messages);

		if ($validator ->passes()){

            $datos = Fisicas::whereId(Input::get('proveedor'))->first();

			$contratos = new Contratos;
			$contratos->no_contrato = Input::get('no_contrato'); 
			$contratos->fecha_contrato =  Input::get('fecha_contrato');
			$contratos->vigencia_contrato= Input::get('vigencia_contrato');
			$contratos->tipo_contrato = Input::get('tipo_contrato');
			$contratos->producto_servicio = Input::get('producto_servicio');
			$contratos->cantidad= Input::get('cantidad');
			$contratos->monto_total = Input::get('monto_total');
            $contratos->proveedor = $datos->nombre.' '.$datos->a_paterno.' '.$datos->a_materno;
            $contratos->clave_ife = $datos->clave_ife;
            $contratos->rfc = $datos->rfc;
            $contratos->no_folio_ife = $datos->no_folio_ife;
            $contratos->domicilio_ife = $datos->domicilio_ife;
			$contratos -> save();
		
			return Redirect::to('contrato')->with('correcto', 'Datos Guardados Correctamente');	
		}

		$this->errors = $validator->errors();

		return Redirect::to('contrato')->withErrors($this->errors)->withInput();
	}
		

}
