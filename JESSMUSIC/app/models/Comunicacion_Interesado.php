<?php

class Comunicacion_Interesado extends Eloquent
{
	protected $table = 'comunicaciones_interesados';
	protected $fillable = array('id_Comunicacion', 'id_interesado');
	protected $guarded  = array('id');
	public    $timestamps = false;
}