<?php

class Contrato_ContratomController extends BaseController{

    public function contratoMoral(){
        $datos['registros'] = Morales::all();

        return View::make('Contrato/contratomoral',$datos);
    }

    public function guardarContratom()
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
            'empresa'           => 'required'
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
            'monto_total'				  => 'El monto total es requerido',
            'empresa.required'            => 'El nombre de la empresa es un campo requerido'
        ];

        $validator = Validator::make($data, $reglas, $messages);

        if ($validator ->passes()){

            $datos = Morales::whereId(Input::get('empresa'))->first();

            $conmorales = new Conmorales;

            $conmorales->no_contrato = Input::get('no_contrato');
            $conmorales->fecha_contrato =  Input::get('fecha_contrato');
            $conmorales->vigencia_contrato= Input::get('vigencia_contrato');
            $conmorales->tipo_contrato = Input::get('tipo_contrato');
            $conmorales->producto_servicio = Input::get('producto_servicio');
            $conmorales->cantidad= Input::get('cantidad');
            $conmorales->monto_total = Input::get('monto_total');
            $conmorales->empresa = $datos->nombre_empresa;
            $conmorales->numero_acta = $datos->numero_acta;
            $conmorales->numero_notario = $datos-> numero_notario;
            $conmorales->localidad_notario = $datos->localidad_notario;
            $conmorales->nombre_notario = $datos->nombre_notario.' '.$datos->a_materno_notario.' '.$datos->a_paterno_notario.' '.$datos->a_materno;
            $conmorales->nombre_representante = $datos->nombre_representante.' '.$datos->a_paterno_representante.' '.$datos->a_materno_representante;
            $conmorales->rfc = $datos->rfc;
            $conmorales->domicilio_empresa = $datos->domicilio_empresa;
            $conmorales->clave_ife = $datos->clave_ife;
            $conmorales->domicilio_ife = $datos->domicilio_ife;
            $conmorales->no_folio_ife = $datos->no_folio_ife;
            $conmorales -> save();

            return Redirect::to('contratomoral')->with('correcto', 'Datos Guardados Correctamente');
        }

        $this->errors = $validator->errors();

        return Redirect::to('contratomoral')->withErrors($this->errors)->withInput();
    }


}
