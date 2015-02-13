<?php

class Contratos_PdfmoralservicioController extends BaseController{
	public function pdfmorals(){

	return PDF::load(View::make('Contratos/pdfmoralservicio'),'A4', 'portrait')->show();
	}
	
}