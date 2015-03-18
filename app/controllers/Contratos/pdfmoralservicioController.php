<?php

class Contratos_PdfmoralservicioController extends BaseController{

	public function pdfMorals(){

        $datos['registro'] = Contratos::whereNoContrato(no_contrato)->first();

        return PDF::load(View::make('Contratos/pdffisicacompra'),'A4', 'portrait')->show();
    }

}
