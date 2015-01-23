<?php

class Alta_AltaController extends BaseController{

	public function fisicaInicio(){
		return View::make('Alta/fisica');	
	}

	public function guardarFisica()
	{
		$nombre = Input::get('nombre');
		$a_paterno = Input::get('a_paterno');
		$a_materno = Input::get('a_materno');
		$rfc = Input::get('rfc');
		$domiciliorfc = Input::get('domiciliorfc');
		$folioife = Input::get('folioife');
		$domicilioife = Input::get('domicilioife');
		$claveife = Input::get('claveife');


		$fisicas = new Fisicas;
		$fisicas->nombre = $nombre;
		$fisicas->a_paterno = $a_paterno;
		$fisicas->a_materno = $a_materno;
		$fisicas->rfc = $rfc;
		$fisicas->domicilio_rfc = $domiciliorfc;
		$fisicas->no_folio_ife = $folioife;
		$fisicas->domicilio_ife = $domicilioife;
		$fisicas->clave_ife = $claveife;
		$fisicas -> save();

		return Redirect::to('/fisica');
	}
	
}