<?php

class ObjetivoGestionController extends BaseController {

	public function postCrearObjetivo() {

		$objetivogestion = new ObjetivoGestion;

		
		$objetivogestion->idobjetivogestion = Input::get("codigo");
		$objetivogestion->gerencia = Input::get("gerencia");
		$objetivogestion->vigencia = Input::get("vigencia");
		$objetivogestion->proceso = Input::get("proceso");
		$objetivogestion->descripcion = Input::get("descripcion");
		$objetivogestion->nrorevision = (int) Input::get("revision");
		$objetivogestion->objetivoestrategico = Input::get("objetivo");
		$objetivogestion->estrategiavinculada = Input::get("estrategia");
		$objetivogestion->seguimiento = Input::get("seguimiento");
		$objetivogestion->mes = Input::get("mes");
		//$objetivogestion->año = Input::get("2015");*/
			
		Log::info(Input::all());	
		if($objetivogestion->save()) {
			return Response::json(array("success"=> true) );
		}

		return Response::json(array("success"=> true));

		//return Redirect::to('usuarios');
		
	}

	public function postCrearAccionIndicador() {
		$input = (object)Input::all();
		$accion = ((object)$input->accion);

		$accionsoporte = new AccionSoporte;
		$accionsoporte->accion = $accion->nombre_accion;

		//$a = ObjetivoGestion::where('idobjetivogestion','=',$input->idobjetivo);
		$a = ObjetivoGestion::find($input->idobjetivo);

		
		$accionsoporte = $a->acciones()->save($accionsoporte);

		Log::info("OSHDFKOHSDOFKSD");
		Log::info($accionsoporte->idaccion);

		foreach ($input->vector as $indicadores) {
			$indicadores = (object)$indicadores;
			Log::info($indicadores->indicador);
		}
		




		return Response::json(array ("success" => true ));
	}

}
