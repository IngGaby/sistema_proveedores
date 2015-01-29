<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaUsuario extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->increments('id_usuario');
			$table->string('nombre',20);
			$table->string('a_paterno',20);
			$table->string('a_materno',20);
			$table->string('usuario',30);
			$table->string('password',150);
			$table->string('permiso',50);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usriario');
	}

}
