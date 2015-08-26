@extends('app')
@section('content')
<div class="container">
	<div class="row">
		{!! Form::open(['route' => 'Empresa/search', 'method' => 'post', 'novalidate', 'class'=> 'form-inline']) !!}
		<div class="form-group">
			<label for="exampleinputname2">Nombre</label>
			<input type="text" class="form-control" Nombre=Nombre>
		</div>
		<button type="submit" class="btn btn-default">Search</button>
		<a href="{{ route('Empresa.index')}}" class="btn btn-primary">All</a>
		<a href="{{ route('Empresa.create')}}" class="btn btn-primary">Create</a>
		{!! Form::close() !!}
		<br>
		<table class="table table-condensed table-striped table-bordered">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Correo</th>
					<th>Direccion</th>
					<th>Telefono</th>
					<th>Localidad</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($Empresas as $Empresa)
				<tr>
					<td>{{ $Empresa->Nombre}}</td>
					<td>{{ $Empresa->Correo}}</td>
					<td>{{ $Empresa->Direccion}}</td>
					<td>{{ $Empresa->Telefono}}</td>
					<td>{{ $Empresa->Localidad}}</td>
					<td>
						<a class="btn btn-primary btn-xs" href="{{ route('Empresa.edit',['id' => $Empresa->id])}}">Edit</a>
						<a class="btn btn-danger btn-xs" href="{{ route('Empresa/destroy',['id' => $Empresa->id])}}">Delect</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>