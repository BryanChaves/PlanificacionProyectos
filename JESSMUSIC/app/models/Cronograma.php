<?php

class Cronograma extends Eloquent
{
	protected $table = 'cronogramas';
	protected $fillable = array('id_Proyecto', 'nombre_responsable','apellido1_responsable','apellido2_responsable','duracion','fecha_Inicio','fecha_Final');
	protected $guarded  = array('id');
	public    $timestamps = false;
}