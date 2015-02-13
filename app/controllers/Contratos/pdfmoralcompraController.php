<?php

class Contratos_PdfmoralcompraController extends BaseController{
	public function pdfMoralc(){

	return PDF::load(View::make('Contratos/pdfmoralcompra'),'A4', 'portrait')->show();
	}
	
}