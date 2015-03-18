<?php

class Contratos_PdfmoralcompraController extends BaseController{

	public function pdfMoralc($no_contrato){

        $datos['registro'] = Conmorales::whereNoContrato($no_contrato)->first();

	return PDF::load(View::make('Contratos/pdfmoralcompra',$datos),'A4', 'portrait')->show();
	}
	
}

