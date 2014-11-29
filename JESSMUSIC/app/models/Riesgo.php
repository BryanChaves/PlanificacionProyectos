<?php

class Riesgo extends Eloquent
{
	protected $table = 'riesgos';
	protected $fillable = array('id_Proyecto', 'detalle','mitigacion');
	protected $guarded  = array('id');
	public    $timestamps = false;
}