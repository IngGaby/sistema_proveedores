<?php

class Contrato_ContratomoController extends BaseController
{


    public function contratoCompra()
    {

        $datos['registros'] = Conmorales::all();

        return View::make('Contratos/moralcompra', $datos);
    }
}
