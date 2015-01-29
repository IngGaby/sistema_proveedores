<?php 

class Alta_MoralController extends BaseController{
	public function moralInicio(){
		return View::make('Alta/moral');
	}
	public function guardarMoral()
	{
		$nombre_empresa = Input::get('nombreempresa');
		$domicilio_empresa = Input::get('domicilioempresa');
		$numero_acta = Input::get('numeroacta');
		$numero_notario = Input::get('numeronotario');
		$localidad_notario = Input::get('localidadnotario');
		$nombre_notario = Input::get('nombrenotario');
		$a_paterno_notario = Input::get('a_paternonotario');
		$a_materno_notario = Input::get('a_maternonotario');
		$nombre_representante = Input::get('nombrerepresentante');
		$a_paterno_representante = Input::get('a_paternorepresentante');
		$a_materno_representante = Input::get('a_maternorepresentante');


		$morales = new Morales;
		$morales->nombre_empresa = $nombre_empresa;
		$morales->domicilio_empresa = $domicilio_empresa;
		$morales->numero_acta = $numero_acta;
		$morales->numero_notario = $numero_notario;
		$morales->localidad_notario = $localidad_notario;
		$morales->nombre_notario = $nombre_notario;
		$morales->a_paterno_notario = $a_paterno_notario;
		$morales->a_materno_notario = $a_materno_notario;
		$morales->nombre_representante = $nombre_representante;
		$morales->a_paterno_representante = $a_paterno_representante;
		$morales->a_materno_representante = $a_materno_representante;
		$morales -> save();

		return Redirect::to('/moral');
	}
}