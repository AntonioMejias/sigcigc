<?php


class Usuario extends Eloquent  {

	protected $table = 'usuarios';

	protected $primaryKey = 'id_usuario';

	public $timestamps = false;

}
