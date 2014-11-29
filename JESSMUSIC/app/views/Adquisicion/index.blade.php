{{link_to("Adquisiciones/create", 'Nueva', $attributes = array(), $secure = null);}}
<!--{{link_to("pilotos", 'Pilotos', $attributes = array(), $secure = null);}}-->
<table>
	<tr>
		<th>Id</th>
		<th>Proyecto</th>
		<th>Nombre Responsable</th>
        <th>Apellido 1</th>
        <th>Apellido 2</th>
        <th>Detalle</th>
        <th>Cantidad</th>
        <th>Costo</th>
        <th>Especificaciones</th>
		<th>Acciones</th>
	</tr>
	@foreach($adquisiciones as $adquisicion)
        <tr>
        	<td>{{ $adquisicion->id }}</td>	
        	<td>{{ $adquisicion->id_Proyecto }}</td>	
        	<td>{{ $adquisicion->nombre_responsable }}</td>
            <td>{{ $adquisicion->apellido1_responsable }}</td>
            <td>{{ $adquisicion->apellido2_responsable }}</td>
            <td>{{ $adquisicion->detalle }}</td>
            <td>{{ $adquisicion->cantidad }}</td>
            <td>{{ $adquisicion->costo }}</td>
            <td>{{ $adquisicion->especificaciones }}</td>

        	<td>
        		{{link_to("Adquisiciones/$adquisicion->id/edit", 'Editar', $attributes = array(), $secure = null);}}
        		{{link_to("Adquisiciones/$adquisicion->id/delete", 'Eliminar', $attributes = array(), $secure = null);}}
        	</td>	
        </tr>
    @endforeach
</table>