<?php

class Contrato_ContratosController extends BaseController{


	public function contratoServicio()
    {

        $datos['registros'] = Contratos::all();

        return View::make('Contratos/ver', $datos);
    }





}