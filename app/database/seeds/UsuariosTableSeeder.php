<?php


class UsuariosTableSeeder extends Seeder {

	public function run()
	{

        Usuarios::create([
            'nombre'=>'JUAN CARLOS',
            'a_paterno'=>'SANCHEZ',
            'a_materno'=>'RAMIREZ',
            'usuario'=>'juan',
            'password'=>'juan',
            'permiso'=>'1',
        ]);
	}

}