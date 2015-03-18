<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaConmorales extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('conmorales', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('no_contrato',10);
            $table->string('fecha_contrato',150);
            $table->string('vigencia_contrato',150);
            $table->string('tipo_contrato',10);
            $table->string('producto_servicio',250);
            $table->string('cantidad',20);
            $table->string('monto_total',200);
            $table->string('empresa');
            $table->string('domicilio_empresa',190);
            $table->string('numero_acta',20);
            $table->string('numero_notario',10);
            $table->string('localidad_notario',20);
            $table->string('nombre_notario',90);
            $table->string('nombre_representante',90);
            $table->string('rfc',30);
            $table->string('no_folio_ife',20);
            $table->string('domicilio_ife',150);
            $table->string('clave_ife',25);
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
		Schema::drop('conmorales');
	}

}
