<?php

class Interesado extends Eloquent
{
	protected $table = 'interesados';
	protected $fillable = array('id_Proyecto', 'nombre','apellido1','apellido2','cedula','telefono','correo','departamento','organizacion');
	protected $guarded  = array('id');
	public    $timestamps = false;
}