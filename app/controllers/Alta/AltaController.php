<?php

class Alta_AltaController extends BaseController{

	public function fisicaInicio(){
		return View::make('Alta/fisica');	
	}

	public function guardarFisica()
	{
		// $nombre = Input::get('nombre');
		// $a_paterno = Input::get('a_paterno');
		// $a_materno = Input::get('a_materno');
		// $rfc = Input::get('rfc');
		// $domiciliorfc = Input::get('domiciliorfc');
		// $folioife = Input::get('folioife');
		// $domicilioife = Input::get('domicilioife');
		// $claveife = Input::get('claveife');

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
			return 'Datos guardados';
		}


		// $fisicas = new Fisicas;
		// $fisicas->nombre = $nombre;
		// $fisicas->a_paterno = $a_paterno;
		// $fisicas->a_materno = $a_materno;
		// $fisicas->rfc = $rfc;
		// $fisicas->domicilio_rfc = $domiciliorfc;
		// $fisicas->no_folio_ife = $folioife;
		// $fisicas->domicilio_ife = $domicilioife;
		// $fisicas->clave_ife = $claveife;
		// $fisicas -> save();

		return Redirect::to('/fisica');
	}
	
}