<?php

class Contratos_PdffisicacompraController extends BaseController{
	public function pdfFisicac(){

	return PDF::load(View::make('Contratos/pdffisicacompra'),'A4', 'portrait')->show();
	}
	
}
 	