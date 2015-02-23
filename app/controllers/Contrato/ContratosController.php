<?php

class Contrato_ContratosController extends BaseController{


	public function contratoServicio()
    {

        $datos['registros'] = Fisicas::whereEstado('1')->get();
        return View::make('Contratos/ver', $datos);
    }





}