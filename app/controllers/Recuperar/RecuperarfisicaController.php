<?php

class Recuperar_RecuperarfisicaController  extends BaseController{

	public  function recuperarFisica(){
		$datos['registros']=Fisicas::all();
		return View::make('Recuperar/recuperarfisica',$datos);
	}
}

