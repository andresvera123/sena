<?php namespace App\Http\Controllers;
use App\Models\Empresa as Empresa;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EmpresaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$Empresas = Empresa::paginate(10);
		return \View::make('listEmpresa', compact('Empresas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return \View::make('new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$Empresa = new Empresa;
		$Empresa->Nit = $request->Nit;
		$Empresa->Nombre = $request->Nombre;
		$Empresa->Correo = $request->Correo;
		$Empresa->Direccion = $request->Direccion;
		$Empresa->Telefono = $request->Telefono;
		$Empresa->Localidad =$request->Localidad;
		$Empresa->save();
		return redirect('Empresa');

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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
