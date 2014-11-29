<?php

class Recurso_Humano extends Eloquent
{
	protected $table = 'recursos_humano';
	protected $fillable = array('id_Proyecto', 'nombre','apellido1','apellido2','puesto','salario','organizacion');
	protected $guarded  = array('id');
	public    $timestamps = false;
}