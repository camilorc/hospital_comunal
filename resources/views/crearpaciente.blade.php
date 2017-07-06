@extends('layouts.app')

@section('content')
	@if( count($errors) > 0)
		<h3>Existen errores en el formulario</h3>
		
	@endif

	<div id="form">
		{{Form::open(['url' => 'crearPaciente', 'method' => 'post', 'class' => 'form-horizontal'])}}
		<div class="form-group">
			{{Form::label('rut', 'Rut', array('class' => 'col-sm-2 control-label'))}}
			{{Form::text('rut')}}
			<span class="error">{{ $errors->first('rut') }}</span>
		</div>
		<div class="form-group">
			{{Form::label('name', 'Nombre', array('class' => 'col-sm-2 control-label'))}}
			{{Form::text('name')}}
			<span class="error">{{ $errors->first('name') }}</span>
		</div>
		<div class="form-group">
			{{Form::label('fecha_nacimiento', 'Fecha de Nacimiento', array('class' => 'col-sm-2 control-label'))}}
			{{Form::date('fecha_nacimiento')}}
			<span class="error">{{ $errors->first('fecha_nacimiento') }}</span>
		</div>
		<div class="form-group">
			{{Form::label('direccion', 'Dirección', array('class' => 'col-sm-2 control-label'))}}
			{{Form::text('direccion')}}
			<span class="error">{{ $errors->first('direccion') }}</span>
		</div>
				
		<div class="form-group">
			{{Form::label('sexo', 'Refugio', array('class' => 'col-sm-2 control-label'))}}
			{{Form::select('sexo', array('M' => 'Masculino', 'F' => 'Femenino'))}}
		</div>
		<div class="form-group">
			{{Form::submit() }}
			{{Form::close() }}
		</div>


	</div>
	

	
@endsection