<?php

class Eliminar_ProveedoresController extends Controller {

    public function fisica($no_fisica)
    {
        $proveedor = Fisicas::find($no_fisica);

        $proveedor->estado = '0';
        $proveedor->save();

        return Redirect::to('/verfisica');

    }

    public function moral($no_moral)

    {
    	$proveedor = Morales::find($no_moral);

    	$proveedor->estado = '0';
    	$proveedor->save();

    	return Redirect::to('/vermoral');
    }
}