<?php

class Recuperar_RecuperarfisicaController  extends BaseController{

	public  function recuperarFisica(){
		$datos['registros']=Fisicas::whereEstado('0')->get();
		return View::make('Recuperar/recuperarfisica',$datos);
	}
}

