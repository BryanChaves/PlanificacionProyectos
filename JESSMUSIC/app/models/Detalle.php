<?php

class Detalle extends Eloquent
{
	protected $table = 'detalles';
	protected $fillable = array('id_alcance', 'descripcion','calidad');
	protected $guarded  = array('id');
	public    $timestamps = false;
}