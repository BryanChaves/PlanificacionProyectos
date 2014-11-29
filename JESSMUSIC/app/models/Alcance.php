<?php

class Alcance extends Eloquent
{
	protected $table = 'alcances';
	protected $fillable = array('id_Proyecto','nombre_alcance' ,'nombre_responsable','apellido1_responsable','apellido2_responsable','detalle');
	protected $guarded  = array('id');
	public    $timestamps = false;
}