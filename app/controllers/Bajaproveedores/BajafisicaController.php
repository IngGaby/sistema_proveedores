<?php

class Bajaproveedores_BajafisicaController extends BaseController{

	public function bajaFisica(){
		$datos['registros']=Fisicas::all();
		return View::make('Bajaproveedores/bajafisica',$datos);

	}
}

