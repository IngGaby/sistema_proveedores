<?php
class Contratos_PdfmoralsController extends BaseController{

    public function pdfMorals($no_contrato){

        $datos['registro'] = Conmorales::whereNoContrato($no_contrato)->first();

        return PDF::load(View::make('Contratos/pdfmoralservicio',$datos),'A4', 'portrait')->show();
    }

}

