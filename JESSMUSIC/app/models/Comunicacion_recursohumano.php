<?php

class Comunicacion_recursohumano extends Eloquent
{
	protected $table = 'comunicaciones_recursohumano';
	protected $fillable = array('id_Comunicacion', 'id_recurso_Humano');
	protected $guarded  = array('id');
	public    $timestamps = false;
}