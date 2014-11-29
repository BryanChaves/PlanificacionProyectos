<?php

class AdquisicionController extends \BaseController {

	protected $layout = 'layouts.default';
	public function index()
	{
		$adquisiciones = Adquisicion::all();
		$this->layout->nest(
			'content',
			'Adquisicion.index',
			array(
				'adquisiciones' => $adquisiciones
			)
		);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$proyectos = Proyecto::all();
		$this->layout->nest(
			'content',
			'Adquisicion.create',
			array(
					'proyectos' => $proyectos

				)
		);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$id_Proyecto = Input::get('proyecto');
		$nombre_responsable	 = Input::get('nombre_responsable');
		$apellido1_responsable = Input::get('apellido1_responsable');
		$apellido2_responsable = Input::get('apellido2_responsable');
		$detalle = Input::get('detalle');
		$cantidad = Input::get('cantidad');
		$costo = Input::get('costo');
		$especificaciones = Input::get('especificaciones');



		$adquisiciones = new Adquision();
		$adquisiciones->id_Proyecto = $id_Proyecto;
		$adquisiciones->nombre_responsable = $nombre_responsable;
		$adquisiciones->apellido1_responsable = $apellido1_responsable;
		$adquisiciones->apellido2_responsable = $apellido2_responsable;
		$adquisiciones->detalle = $detalle;
		$adquisiciones->cantidad = $cantidad;
		$adquisiciones->costo = $costo;
		$adquisiciones->especificaciones = $especificaciones;
		$adquisiciones->save();
		return Redirect::to('Adquisiciones');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$adquision = Adquisicion::find($id);
		$proyectos = Proyecto::all();
		$this->layout->nest(
			'content',
			'Adquisicion.edit',
			array(
					'adquision' => $adquision,
					'proyectos' => $proyectos

				)
		);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$adquisiones = Adquisicion::find($id);
		$adquisiciones->id_Proyecto = $id_Proyecto;
		$adquisiciones->nombre_responsable = $nombre_responsable;
		$adquisiciones->apellido1_responsable = $apellido1_responsable;
		$adquisiciones->apellido2_responsable = $apellido2_responsable;
		$adquisiciones->detalle = $detalle;
		$adquisiciones->cantidad = $cantidad;
		$adquisiciones->costo = $costo;
		$adquisiciones->especificaciones = $especificaciones;
		$adquisiciones->save();
		return Redirect::to('Adquisiciones');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		 $adquisiciones = Adquisicion::find($id);
		$adquisiciones->delete();
		return Redirect::to('Adquisiciones');
	}


}
