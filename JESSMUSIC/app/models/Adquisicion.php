<?php

class Adquisicion extends Eloquent
{
	protected $table = 'adquisiciones';
	protected $fillable = array('id_Proyecto', 'nombre_responsable','apellido1_responsable','apellido2_responsable','detalle','cantidad','costo','especificaciones');
	protected $guarded  = array('id');
	public    $timestamps = false;
}