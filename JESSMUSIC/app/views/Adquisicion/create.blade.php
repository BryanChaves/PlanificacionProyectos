<h3>Nueva Adquisición</h3>

{{ Form::open(array('url' => 'Adquisiciones')) }}
	{{ Form::label('proyectos', 'Proyectos:') }}
	<select name="proyecto">
		@foreach($proyectos as $proyecto)
			<option value={{$proyecto->id}}>{{$proyecto->nombre_proyecto}}</option>
    	@endforeach
	</select>
	<br>
	{{ Form::label('nombre_responsable', 'Nombre Responsable') }}
	{{ Form::text('nombre_responsable', '') }}
	<br>
	{{ Form::label('apellido1_responsable', 'Apellido 1') }}
	{{ Form::text('apellido1_responsable', '') }}
	<br>
	{{ Form::label('apellido2_responsable', 'Apellido 2') }}
	{{ Form::text('apellido2_responsable', '') }}
	<br>
	{{ Form::label('detalle', 'Detalle') }}
	{{ Form::text('detalle', '') }}
	<br>
	{{ Form::label('detalle', 'Detalle') }}
	{{ Form::text('detalle', '') }}
	<br>
	{{ Form::label('cantidad', 'Cantidad') }}
	<input id="cantidad" type="number" value="0" min="0" max="99" /><br>
	<br>
	{{ Form::label('costo', 'Costo') }}
	{{ Form::text('costo', '') }}
	<br>
	{{ Form::label('especificaciones', 'Especificaciones') }}
	{{ Form::textArea('especificaciones', '') }}
	<br>

	{{Form::submit('Salvar', array())}}

{{ Form::close() }}