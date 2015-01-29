<?php

class Alta_AltaController extends BaseController{

	public function fisicaInicio(){
		return View::make('Alta/fisica');	
	}

	public function guardarFisica()
	{

		$data = Input::all();

		$reglas = [
			'nombre'       => 'required',
			'a_paterno'    => 'required',
			'a_materno'    => 'required',
			'rfc'          => 'required|alpha_num',
			'domiciliorfc' => 'required',
			'folioife'	   => 'required|integer',
			'domicilioife' => 'required',
			'claveife'	   => 'required|alpha_num'
		];

		$messages = [
			'nombre.required'        => 'El nombre es un campo requerido',
			'a_paterno.required'     => 'El apellido paterno es un campo requerido',
			'a_materno.required'     => 'El apellido materno es un campo requerido',
			'rfc.required'		     => 'El RFC es un campo requerido',
			'rfc.alpha_num'		     => 'El RFC debe ser Alfanúmerico',
			'domiciliorfc.required'  => 'El domicilio del RFC es un campo requerido',
			'folioife.required'		 => 'El folio del IFE es un campo requerido',
			'folioife.integer'		 => 'El folio del IFE debe ser númerico',
			'domicilioife.required'  => 'El domicilio del ife es un campo requerido',
			'claveife.required'		 => 'La clave del IFE es un campo requerido',
			'claveife.alpha_num'	 => 'La clave del IFE debe ser Alphanúmerico'
		];

		$validator = Validator::make($data, $reglas, $messages);

		if($validator->passes()){

			$fisicas = new Fisicas;
			$fisicas->nombre = Input::get('nombre');
			$fisicas->a_paterno = Input::get('a_paterno');
			$fisicas->a_materno = Input::get('a_materno');
			$fisicas->rfc = Input::get('rfc');
			$fisicas->domicilio_rfc = Input::get('domiciliorfc');
			$fisicas->no_folio_ife = Input::get('folioife');
			$fisicas->domicilio_ife = Input::get('domicilioife');
			$fisicas->clave_ife = Input::get('claveife');
			$fisicas -> save();


			return Redirect::to('fisica')->with('correcto', 'Datos Guardados Correctamente');
		}

		$this->errors = $validator->errors();

		return Redirect::to('fisica')->withErrors($this->errors)->withInput();
	}
	
}