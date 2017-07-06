@extends('layouts.app')

@section('content')
	
	@if($paciente == null)
		<h1>No existen el paciente</h1>
	@else
		
			<h2>id del paciente : {{ $paciente->id }}</h2>
			<h2>{{ $paciente->name }}</h2>
		
		
	@endif

	@if( count($errors) > 0)
		<h3>Existen errores en el formulario</h3>
		
	@endif




	<div id="form">
		{{Form::open(['url' => 'editarpaciente', 'method' => 'post', 'class' => 'form-horizontal'])}}
		{{Form::hidden('id',$paciente->id)}}
		<div class="form-group">
			{{Form::label('rut', 'Rut', array('class' => 'col-sm-2 control-label'))}}
			{{Form::text('rut',$paciente->rut)}}
			<span class="error">{{ $errors->first('rut') }}</span>
		</div>
		<div class="form-group">
			{{Form::label('name', 'Nombre', array('class' => 'col-sm-2 control-label'))}}
			{{Form::text('name',$paciente->name)}}
			<span class="error">{{ $errors->first('name') }}</span>
		</div>
		<div class="form-group">
			{{Form::label('fecha_nacimiento', 'Fecha de Nacimiento', array('class' => 'col-sm-2 control-label'))}}
			{{Form::text('fecha_nacimiento',$paciente->fecha_nacimiento)}}
			<span class="error">{{ $errors->first('fecha_nacimiento') }}</span>
		</div>
		<div class="form-group">
			{{Form::label('direccion', 'Direccion', array('class' => 'col-sm-2 control-label'))}}
			{{Form::text('direccion',$paciente->direccion)}}
			<span class="error">{{ $errors->first('direccion') }}</span>
		</div>
		
		<div class="form-group">
			{{Form::label('sexo', 'Sexo', array('class' => 'col-sm-2 control-label'))}}
			{{Form::select('sexo', array('M' => 'Masculino', 'F' => 'Femenino'))}}
		</div>
		<div class="form-group">
			{{Form::submit() }}
			{{Form::close() }}
		</div>


	</div>
	
@endsection