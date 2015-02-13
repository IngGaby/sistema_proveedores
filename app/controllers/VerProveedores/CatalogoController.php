<?php

class VerProveedores_CatalogoController extends BaseController{

	public function verFisica(){
		$datos['registros']=Fisicas::whereEstado('1')->get();
		return View::make('Verproveedores/verfisica',$datos);

	}

	public function verMoral(){
		$datos['registros']=Morales::whereEstado('1')->get();
		return View::make('Verproveedores/vermoral',$datos);
	}
}