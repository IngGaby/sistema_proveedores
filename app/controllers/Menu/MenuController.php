<?php

class Menu_MenuController extends BaseController{
	public function menuInicio(){
		return View::make('Menu/menu');	
	}
	

}