<?php


class AccionSoporte extends Eloquent  {

	protected $table = 'detalleaccionesoporte';

	protected $primaryKey = 'idaccion';

	public $timestamps = false;


	public function objetivo() {
        return $this->belongsTo('ObjetivoGestion','idobjetivogestion', 'idobjetivogestion');
    }

}
