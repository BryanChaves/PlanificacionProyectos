<h3>Editar Adquisición</h3>

{{ Form::open(array('url' => "Adquisiciones/$adquisicion->id/update")) }}
	
	{{ Form::label('proyecto', 'Proyecto:') }}
	<select name="proyecto">
		@foreach($proyectos as $proyecto)
			<?php
			 if($proyecto->id==$adquisicion->id_Proyecto){
			 	echo "<option selected value= $proyecto->id>$proyecto->nombre_proyecto</option>";
			 }else{
			 	echo "<option  value= $proyecto->id>$proyecto->nombre_proyecto</option>";
			 }
			?>
    	@endforeach
	</select>
	<br>

	{ Form::label('nombre_responsable', 'Nombre Responsable') }}
	{{ Form::text('nombre_responsable', '$adquisicion->nombre_responsable') }}
	<br>
	{{ Form::label('apellido1_responsable', 'Apellido 1') }}
	{{ Form::text('apellido1_responsable', '$adquisicion->apellido1_responsable') }}
	<br>
	{{ Form::label('apellido2_responsable', 'Apellido 2') }}
	{{ Form::text('apellido2_responsable', '$adquisicion->apellido2_responsable') }}
	<br>
	{{ Form::label('detalle', 'Detalle') }}
	{{ Form::text('detalle', '$adquisicion->detalle') }}
	<br>
	{{ Form::label('cantidad', 'Cantidad') }}
	<input id="cantidad" type="number" value=$adquisicion->cantidad min="0" max="99" /><br>
	<br>
	{{ Form::label('costo', 'Costo') }}
	{{ Form::text('costo', '$adquisicion->costo') }}
	<br>
	{{ Form::label('especificaciones', 'Especificaciones') }}
	{{ Form::textArea('especificaciones', '$adquisicion->especificaciones') }}
	<br>

	{{Form::submit('Salvar', array())}}

{{ Form::close() }}