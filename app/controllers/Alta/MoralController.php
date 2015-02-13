<?php 

class Alta_MoralController extends BaseController{
	public function moralInicio(){
		return View::make('Alta/moral');
	}

	public function guardarMoral()
	{
							
		$data  =  Input::all();

		$reglas = [
			'nombreempresa'		    =>'required',
			'domicilioempresa'		=>'required|alpha_num',
			'numeroacta'			=>'required|numeric',
			'numeronotario'		  	=>'required|numeric',
			'localidadnotario'		=>'required|alpha_num',
			'nombrenotario'		  	=>'required',
			'a_paternonotario'		=>'required',
			'a_maternonotario'		=>'required',
			'nombrerepresentante'	=>'required',
			'a_paternorepresentante'=>'required',
			'a_maternorepresentante'=>'required'
		];

		$messages = [
			'nombreempresa.required'		  => 'El nombre de la empresa es un campo requerido',
			'domicilioempresa.required'	 	  => 'El domicilio de la empresa es un campo requerido',
			'domicilioempresa.alpha_num'	  => 'El domicilio de la empresa debe ser Alphanúmerico',
			'numeroacta.required'			  => 'El número de acta es un campo requerido',
			'numeroacta.numeric'			  => 'El número de acta debe ser númerico',
			'numeronotario.required'		  => 'El número de notario es un campo requerido',
			'numeronotario.numeric'		 	  => 'El numero de notario debe serun campo númerico',
			'localidadnotario.required'	 	  => 'La localidad del notario es un campo requerido',
			'localidadnotario.alpha_num'	  => 'La localidad del notario debe ser Alphanúmerico',
			'nombrenotario.required'		  => 'El nombre del notario es un campo requerido',
			'a_paternonotario.required'		  => 'El apallido paterno es un campo requerido',
			'a_maternonotario.required'		  => 'El apellido materno es un campo requerido',
			'nombrerepresentante.required'	  => 'El nombre del representante es un campo requerido',
			'a_paternorepresentante.required' => 'El apellido paterno  del representante es un campo requerido ',
			'a_maternorepresentante.required' => 'El apellido materno del representante es un campo requerido'
		];

		$validator = Validator::make($data, $reglas, $messages);

		if ($validator -> passes()){

			$morales = new Morales;
			$morales->nombre_empresa = Input::get('nombreempresa');
			$morales->domicilio_empresa = Input::get('domicilioempresa');
			$morales->numero_acta = Input::get('numeroacta');
			$morales->numero_notario = Input::get('numeronotario');
			$morales->localidad_notario = Input::get('localidadnotario');
			$morales->nombre_notario = Input::get('nombrenotario');
			$morales->a_paterno_notario = Input::get('a_paternonotario');
			$morales->a_materno_notario = Input::get('a_maternonotario');
			$morales->nombre_representante = Input::get('nombrerepresentante');
			$morales->a_paterno_representante = Input::get('a_paternorepresentante');
			$morales->a_materno_representante = Input::get('a_maternorepresentante');
			$morales->estado = '1';
			$morales -> save();

			return Redirect::to('moral')->with('correcto', 'Datos Guardados Correctamente');
		}

		$this->errors = $validator->errors();

		return Redirect::to('moral')->withErrors($this->errors)->withInput();
		
	}
}


		
	