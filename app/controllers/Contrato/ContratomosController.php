<?php
class Contrato_ContratomosController extends BaseController
{


    public function contratoServicio()
    {

        $datos['registros'] = Conmorales::all();

        return View::make('Contratos/moralservicio', $datos);
    }
}
