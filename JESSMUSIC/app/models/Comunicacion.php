<?php

class Comunicacion extends Eloquent
{
	protected $table = 'comunicaciones';
	protected $fillable = array('tipo_comunicacion','detalle');
	protected $guarded  = array('id');
	public    $timestamps = false;
}