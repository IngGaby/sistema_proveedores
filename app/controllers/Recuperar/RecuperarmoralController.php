<?php

class Recuperar_RecuperarmoralController extends BaseController{

		public function recuperarMoral(){
			$datos['registros']=Morales::all();
			return View::make('Recuperar/recuperarmoral',$datos);

	}
}