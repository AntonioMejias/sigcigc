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
Route::get('/cpanel','HomeController@showLogin');

Route::group(array('before' => 'authentication'), function() {
    
	Route::get('/','HomeController@showBackend');

	Route::get('/vacaciones','HomeController@showVacaciones'); 							/*vacaciones*/

	Route::get('/control_asistencia','HomeController@showControlasistencia'); 			/*asistencia*/

	Route::get('/anadir_asistencia','HomeController@showAnadirasistencia');

	Route::get('/objetivogestion','HomeController@showObjetivogestion'); 				/*objetivo de gestion*/
	
	Route::get('/anadir_objetivo_gestion','HomeController@showAnadirobjetivogestion');

	Route::get('/anadir_informe','HomeController@showAnadir_informe'); 					/*informe semanal*/

	Route::get('/informe_semanal','HomeController@showInformesemanal');

	Route::get('/pdfasistencia', 'HomeController@showVerpdfasistencia');					/* pdf*/

	Route::get('/pdfvacaciones', 'HomeController@showVerpdfvacaciones');

	Route::get('/pdfinformesemanal', 'HomeController@showVerpdfinformesem');

	Route::get('/pdfinformegestion', 'HomeController@showVerpdfinformegest');

});	

/* RUTA PARA LAS TABLAS*/

Route::get('/usuarios', 'HomeController@showUsuarios');


/*RUTA PARA LOS USUARIOS*/

Route::post('login','UsuariosController@login');

Route::get('logout','UsuariosController@logout');

Route::get('backend/users_action', 'UsuariosController@users_action');

Route::post('backend/nuevo_usuario','UsuariosController@create_action');

Route::post('backend/editar_usuario','UsuariosController@edit_action');

Route::post('backend/eliminar_usuario','UsuariosController@delete_action');

/*RUTA PARA LOS OBJETIVOS DE GESTION*/

Route::controller('objetivo','ObjetivoGestionController');




