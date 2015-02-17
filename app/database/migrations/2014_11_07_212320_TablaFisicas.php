<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaFisicas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fisicas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',20);
			$table->string('a_paterno',20);
			$table->string('a_materno',20);
			$table->string('rfc',25);
			$table->string('domicilio_rfc',50);
			$table->string('no_folio_ife',20);
			$table->string('domicilio_ife',50);
			$table->string('clave_ife',25);
			$table->string('estado',1);
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
		Schema::drop('fisicas');
	}

}
