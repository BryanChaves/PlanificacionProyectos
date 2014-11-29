<?php

class Proyecto extends Eloquent
{
	protected $table = 'proyectos';
	protected $fillable = array('nombre_Proyecto', 'nombre_Director','apellido1_Director','apellido2_Director','areas_Conocimiento','areas_Aplicacion','objetivos','justificacion','supuestos','restricciones','informacion_Historica','interesado','monto_Proyecto','moneda','descripcion','fecha_Inicio','fecha_Final','aprovado');
	protected $guarded  = array('id');
	public    $timestamps = false;
}