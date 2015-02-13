<?php

class Recuperar_RecuperarmoralController extends BaseController{

		public function recuperarMoral(){
			$datos['registros']=Morales::whereEstado('0')->get();
			return View::make('Recuperar/recuperarmoral',$datos);

	}
}