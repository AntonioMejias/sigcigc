<?php

class HomeController extends BaseController {


	public function showLogin(){
		return View::make('master.layout');
	}

	public function showBackend(){
	
		return View::make('plantillas.dashboard');
	}	

	public function showUsuarios(){
		
		return View::make('backend.usuarios',array('usuarios' => Usuario::all()));				
	}

	public function showVacaciones(){
		
		return View::make('backend.vacaciones',array('usuarios' => Usuario::all()));		
	}	

	public function showObjetivogestion(){
		
		return View::make('backend.objetivogestion',array('usuarios' => Usuario::all()));		
	}	

	public function showControlasistencia(){
	
		return View::make('backend.control_asistencia',array('usuarios' => Usuario::all()));		
	}	

	public function showAnadirasistencia(){
	
		return View::make('backend.anadir_asistencia',array('usuarios' => Usuario::all()));		
	}	

	public function showAnadirobjetivogestion() {
		return View::make('backend.anadir_objetivo_gestion',array('usuarios' => Usuario::all()));			
	}	
	public function showAnadir_informe() {
		return View::make('backend.anadir_informe',array('usuarios' => Usuario::all()));			
	}	

	public function showInformesemanal() {
		return View::make('backend.informe_semanal',array('usuarios' => Usuario::all()));			
	}

	public function showVerpdf() {
		$html = View::make("pdf.asistencia");
    	return PDF::load($html, 'A4', 'landscape')->show();
	}

	public function showVerpdfvacaciones() {
		$html = View::make("pdf.vacaciones");
    	return PDF::load($html, 'A4', 'landscape')->show();			
	}

	public function showVerpdfinformesem() {
		$html = View::make("pdf.informesemanal");
    	return PDF::load($html, 'A4', 'landscape')->show();			
	}

	public function showVerpdfinformegest() {
		$html = View::make("pdf.informegestion");
    	return PDF::load($html, 'A4', 'landscape')->show();			
	}
}
