<?php

class Contratos_PdffisicacompraController extends BaseController{

	public function pdfFisicac($no_contrato){

        $datos['registro'] = Contratos::whereNoContrato($no_contrato)->first();

	return PDF::load(View::make('Contratos/pdffisicacompra'),'A4', 'portrait')->show();
	}

}
