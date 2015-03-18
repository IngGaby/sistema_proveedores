<?php

class Contrato_ContratofsController extends BaseController{


    public function contratoCompra()
    {

        $datos['registros'] = Contratos::all();

        return View::make('Contratos/fcompra', $datos);
    }


}


