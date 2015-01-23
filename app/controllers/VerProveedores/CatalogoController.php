<?php

class VerProveedores_CatalogoController extends BaseController{

	public function verFisica(){
		$datos['registros']=Fisicas::all();
		return View::make('Verproveedores/verfisica',$datos);

	}

	public function verMoral(){
		$datos['registros']=Morales::all();
		return View::make('Verproveedores/vermoral',$datos);
	}
}