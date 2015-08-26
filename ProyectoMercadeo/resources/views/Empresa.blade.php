@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route' => 'Empresa.store', 'method' => 'post', 'novalidate']) !!}
			<div class="form-group">
				{!! Form::label('full_name', 'Nombre') !!}
				{!! Form::text('Nombre', null, ['class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('Correo', 'Direccion') !!}
				{!! Form::text('Direccion', null, ['class' => 'form-control', 'required' => 'required']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Enviar',['class' => 'btn btn-success']) !!}
			</div>
			{!!Form::close() !!}
		</div>
	</div>
</div>
@endsection