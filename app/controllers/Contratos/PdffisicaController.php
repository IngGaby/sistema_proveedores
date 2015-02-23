<?php

class Contratos_PdffisicaController extends BaseController{

 	public function pdfFisicas($no_contrato){

        $datos['registro'] = Contratos::whereNoContrato($no_contrato)->first();

    	return PDF::load(View::make('Contratos/pdffisica',$datos), 'A4', 'portrait')->show();
	}
}