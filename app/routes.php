<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/login','LoginController@loginInicio');
Route::post('/validar','LoginController@loginValidar');

Route::get('/menu',array('before'=>'sesion','uses'=>'Menu_MenuController@menuInicio'));

Route::get('/fisica',array('before'=>'sesion','uses'=>'Alta_AltaController@fisicaInicio'));
Route::post('/guardar_fisica',array('before'=>'sesion','uses'=>'Alta_AltaController@guardarFisica'));

Route::get('/moral',array('before'=>'sesion','uses'=>'Alta_MoralController@moralInicio'));
Route::post('/guardar_moral',array('before'=>'sesion','uses'=>'Alta_MoralController@guardarMoral'));

Route::get('/contrato',array('before'=>'sesion','uses'=>'Contrato_ContratoController@contratoInicio'));
Route::post('/guardar_contrato',array('before'=>'sesion','uses'=>'Contrato_ContratoController@guardarContrato'));

Route::get('/verfisica',array('before'=>'sesion','uses'=>'VerProveedores_CatalogoController@verFisica'));
Route::get('/vermoral',array('before'=>'sesion','uses'=>'VerProveedores_CatalogoController@verMoral'));

Route::get('/baja',array('before'=>'sesion','uses'=>'Bajaproveedores_BajaController@bajaMoral'));
Route::get('/bajafisica',array('before'=>'sesion','uses'=>'Bajaproveedores_BajafisicaController@bajafisica'));

Route::get('/recuperarfisica',array('before'=>'sesion','uses'=>'Recuperar_RecuperarfisicaController@recuperarFisica'));
Route::get('/recuperarmoral',array('before'=>'sesion','uses'=>'Recuperar_RecuperarmoralController@recuperarMoral'));

Route::get('/contratofisicaservicio','Contratos_PdffisicaController@pdfFisicas');
Route::get('/contratofisicacompra','Contratos_PdffisicacompraController@pdfFisicac');

Route::get('/contratomoralcompra','Contratos_PdfmoralcompraController@pdfMoralc');
Route::get('/contratomoralservicio','Contratos_PdfmoralservicioController@pdfMorals');

Route::get('/eliminar-fisica/{no_fisica}', 'Eliminar_ProveedoresController@fisica');
Route::get('/recuperar-fisica/{no_fisica}', 'Recupera_ProveedoresController@fisica');

Route::get('/eliminar-moral/{no_moral}','Eliminar_ProveedoresController@moral');
Route::get('/recuperar-moral/{no_moral}','Recupera_ProveedoresController@moral');

Route::get('/ver','Contrato_ContratosController@contratoServicio');


Route::get('/salir', function()
{
	Session::flush();
	return Redirect::to('/login');
});
