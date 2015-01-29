<?php

class LoginController extends BaseController{
	public function loginInicio(){
		return View::make('login');
	}

	public function loginValidar(){
		$usuario = Input::get('usuario');
		$password = Input::get('password');

		$registro = Usuarios::whereUsuario($usuario)->wherePassword($password)->first();

		if(empty($registro)){
			return Redirect::to('/login');
		}else{
			$nombre = $registro->nombre.' '.$registro->a_paterno.' '.$registro->a_materno;
			Session::put('nombre',$nombre);
			return Redirect::to('/menu');
		}
	}



}