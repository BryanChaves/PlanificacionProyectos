<?php

class Costo extends Eloquent
{
	protected $table = 'costos';
	protected $fillable = array('id_Proyecto', 'id_alcance','detalle','costo','descuento','impuesto','total_recursos_Humanos');
	protected $guarded  = array('id');
	public    $timestamps = false;
}