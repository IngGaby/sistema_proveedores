<?php

class Contratos_PdffisicaController extends BaseController{

 	public function pdfFisicas(){
	
    	return PDF::load(View::make('Contratos/pdffisica'), 'A4', 'portrait')->show();
	}
}