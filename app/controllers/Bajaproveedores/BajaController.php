<?php

class Bajaproveedores_BajaController extends BaseController{

		public function bajaMoral(){
			$datos['registros']=Morales::all();
			return View::make('Bajaproveedores/baja',$datos);

	}
}

