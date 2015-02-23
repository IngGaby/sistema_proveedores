<?php
/**
 * Created by PhpStorm.
 * User: sistemas
 * Date: 2/17/15
 * Time: 10:36 AM
 */

class Recupera_ProveedoresController extends Controller {

    public function fisica($id_recuperar)
    {
        $recupera = Fisicas::find($id_recuperar);

        $recupera->estado = 1;
        $recupera->save();

        return Redirect::to('/recuperarfisica');
    }

    public function moral($id_recuperar)
    {
    	$recuperar = Morales::find($id_recuperar);

    	$recuperar->estado = 1;
    	$recuperar->save();

    	return Redirect::to('/recuperarmoral');
    }
}