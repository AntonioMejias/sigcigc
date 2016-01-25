<?php

class UsuariosController extends BaseController {

	public function users_action()
	{
		$id = Input::get('id');
		$accion = Input::get('accion');

		$user = Usuario::find($id);
		switch ($accion) {
			case 1:
				# code... Editar
				return View::make('usuarios.edit', array('user'=> $user));
				break;
			case 2:
				# code... Eliminar
				return View::make('usuarios.delete', array('user'=> $user));
				break;
			default:
				# code... Crear
				return View::make('usuarios.new');
				break;
		}
	}

	public function login()
	{

		$user 	= Input::get('user');
		$passwd = Input::get('password');	
		
		$user = DB::table('usuarios')->where('usu_login', $user)->first();

		if($user != NULL){
			if($passwd == $user->usu_passwd){								 				

				Session::put('user', $user->id_usuario);
				Session::put('nivel', $user->usu_login);
				Session::put('nombre', $user->usu_nombre);
				Session::put('apellido', $user->usu_apellido);													 		

				return Redirect::to('/');
			}else{
				Session::put('error', "Constrase&ntilde;a invalida, intentelo nuevamente");	
				return Redirect::to('/cpanel');		
			}
		}else{
			Session::put('error', "El usuario no existe");
			return Redirect::to('/cpanel');				
		}

	}


	public function create_action()
	{

		$usuarios = new Usuario;

		$usuarios->usu_ficha = Input::get('ficha');
		$usuarios->usu_nombre = Input::get('nombre');
		$usuarios->usu_apellido = Input::get('apellido');	
		$usuarios->usu_cedula = Input::get('cedula');	
		$usuarios->usu_correo = Input::get('correo');
		$usuarios->usu_departamento = Input::get('departamento');	
		$usuarios->usu_passwd = Input::get('password');	
		$usuarios->usu_cuestion = "por ahora";	
		$usuarios->usu_respuesta = "no hay nada";	
		$usuarios->usu_roll = 1;
		$usuarios->usu_login = Input::get('usuario');

		$usuarios->save();

		Session::put('message', "Usuario creado existosamente");
		return Redirect::to('usuarios');
	}

	public function edit_action()
	{
		/*$id = Input::get('id');
		$login = Input::get('login');
		$contrasenna = Input::get('contrasenna');
		$apellido = Input::get('apellido');
		$nombre = Input::get('nombre');
		$correo = Input::get('correo');
		$especialidad = Input::get('especialidad');


		$usuarios = Usuario::find($id);

		$usuarios->login = $login;
		$usuarios->contrasenna = $contrasenna;
		$usuarios->apellido = $apellido;
		$usuarios->nombre = $nombre;
		$usuarios->correo = $correo;
		$usuarios->especialidad = $especialidad;

		$usuarios->save();*/

		//$usuario = Usuario::find(Input::get('cedula'));
		$usuario = Usuario::where('usu_cedula', '=', Input::get('cedula'))->update(
			array("usu_nombre" => Input::get('nombre'), 
			"usu_apellido" => Input::get('apellido'), 
			"usu_correo" => Input::get('correo'), 
			"usu_departamento" => Input::get('departamento') , 
			"usu_departamento"  => Input::get('ficha') )
		);


		/*$usuario->usu_nombre = Input::get('nombre');
		$usuario->usu_apellido = Input::get('apellido');	
		$usuario->usu_correo = Input::get('correo');
		$usuario->usu_departamento = Input::get('departamento');
		$usuario->usu_ficha = Input::get('ficha');	*/

		//$usuario->update();

		Session::put('message', "Usuario editado existosamente");
		return Redirect::to('usuarios');		
	}


	public function delete_action()
	{
		$id = Input::get('cedula');

		DB::table('usuarios')->where('usu_cedula', $id)->delete();

		Session::put('message', "Usuario eliminado existosamente");
		return Response::json(array('success' => true));		
	}


	public function logout()
	{
		Session::flush();		
		return Redirect::to('/cpanel');	
	}	

}