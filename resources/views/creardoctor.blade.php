@extends('layouts.app')

@section('content')
	@if( count($errors) > 0)
		<h3>Existen errores en el formulario</h3>
		
	@endif
	<div id="form">
		{{Form::open(['url' => 'crearDoctor', 'method' => 'post', 'class' => 'form-horizontal'])}}
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
			{{Form::label('fecha_contratacion', 'Fecha de Contratación', array('class' => 'col-sm-2 control-label'))}}
			{{Form::date('fecha_contratacion')}}
			<span class="error">{{ $errors->first('fecha_contratacion') }}</span>
		</div>
		<div class="form-group">
			{{Form::label('especialidad', 'Especialidad', array('class' => 'col-sm-2 control-label'))}}
			{{Form::text('especialidad')}}
			<span class="error">{{ $errors->first('especialidad') }}</span>
		</div>

		<div class="form-group">
			{{Form::label('valor_consulta', 'Valor Consulta', array('class' => 'col-sm-2 control-label'))}}
			{{Form::number('valor_consulta')}}
			<span class="error">{{ $errors->first('valor_consulta') }}</span>
		</div>
	
		<div class="form-group">
			{{Form::submit() }}
			{{Form::close() }}
		</div>


	</div>
	

	
@endsection